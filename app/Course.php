<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'id',
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'hours',
        'price'
    ];
}
