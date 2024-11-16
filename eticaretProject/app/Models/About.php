<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        "image",
        "name",
        "content",
        "text1-icon",
        "text1",
        "text1-content",
        "text2-icon",
        "text2",
        "text2-content",
        "text3-icon",
        "text3",
        "text3-content",
    ];
}
