<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidates extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'candidates';
    protected $connection = 'mysql';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
}
