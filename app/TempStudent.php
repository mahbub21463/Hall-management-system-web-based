<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempStudent extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey =  'student_id';
    public $incrementing = false;
    
}
