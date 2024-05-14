<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public static function options()
    {
        return [
           1 => "Atom energeya",
           2 => "Qayta tiklanuvchi energeya",
        ];
    }
    public static function status()
    {
        return [
           1 => "active",
           2 => "in active",
        ];
    }
}
