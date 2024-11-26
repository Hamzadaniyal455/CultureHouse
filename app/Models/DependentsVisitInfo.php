<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DependentsVisitInfo extends Model
{
    use HasFactory;

    protected $table = 'dependents_visit_info';

    protected $fillable = ['visit_id', 'dependent_id'];

    public $timestamps = false;
}
