<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuMinuman extends Model
{
    use HasFactory;

    protected $table = 'menu_minuman';

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];
}
