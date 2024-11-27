<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $table = 'visitor';

    protected $fillable = ['name', 'phone', 'type','nationality', 'id_number', 'gender', 'date'];

    public $timestamps = false;
}
