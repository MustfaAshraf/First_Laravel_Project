<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'subject',
        'message',
    ];
}
