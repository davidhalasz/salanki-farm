<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opening extends Model
{
    use HasFactory;
    protected $fillable = [
        'day', 'start', 'end', 'closed'
    ];
    protected $cats = [
        'closed' => 'boolean' ,
        'start' => 'time',
        'end' => 'time',
    ];
}
