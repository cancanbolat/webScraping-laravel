<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SQLServerModel extends Model
{
    use HasFactory;
    protected $table = 'Films';
    public $timestamps = false;
}
