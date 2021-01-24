<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'widget_id',
        'name',
        'email',
        'message'
    ];
}
