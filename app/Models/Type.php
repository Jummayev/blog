<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public static function options()
    {
        return [
           1 => "AES",
           2 => "GES",
           3 => "Shamol ES",
           4 => "Quyosh ES",
           5 => "Qiziqarli",
           6 => "Mening Bloglarim",
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
