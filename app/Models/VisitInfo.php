<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitInfo extends Model
{
    use HasFactory;

    protected $table = 'visit_info';

    protected $fillable = ['visitor_id', 'date'];

    public $timestamps = false;

}
