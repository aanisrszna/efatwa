<?php

// app/Models/Fatwa.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fatwa extends Model
{
    use HasFactory;

    protected $fillable = [
        'tajuk',
        'status_pewartakan',
        'kategori',
        'tarikh_keputusan',
        'tarikh_diwartakan',
        'keputusan',
        'fail',
    ];
}
