<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JsonModel extends Model
{
    use HasFactory;
    protected $table = 'json';
    public $timestamps = false;
}
