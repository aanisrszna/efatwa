<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbladminTable extends Migration
{
    public function up()
    {
        Schema::create('tbladmin', function (Blueprint $table) {
            $table->id();  // This will automatically create an auto-incrementing primary key
            $table->string('AdminName')->nullable();
            $table->string('UserName');
            $table->bigInteger('MobileNumber')->nullable();
            $table->string('Email')->nullable();
            $table->string('Password');
            $table->timestamp('AdminRegdate')->nullable()->default(now());
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbladmin');
    }
}
