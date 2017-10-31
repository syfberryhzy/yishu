<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemInfo extends Model
{
    protected $fillable = ['qrcode', 'address', 'email', 'phone'];
}
