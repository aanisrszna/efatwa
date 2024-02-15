<?php

// database/migrations/xxxx_xx_xx_create_fatwas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFatwasTable extends Migration
{
    public function up()
    {
        Schema::create('fatwas', function (Blueprint $table) {
            $table->id();
            $table->string('tajuk');
            $table->string('status_pewartakan');
            $table->string('kategori');
            $table->date('tarikh_keputusan');
            $table->date('tarikh_diwartakan');
            $table->text('keputusan');
            $table->string('fail');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fatwas');
    }
}
