<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
      "title",
      "image",
      "video",
      "tag",
      "description",
      "is_top",
      "is_banner",
      "is_popular",
      "type",
      "view_count",
      "status",
      "created_at",
    ];
}
