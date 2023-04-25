<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['emplo_fname', 'emplo_lname', 'emplo_address', 'emplo_phone', 'emplo_email', 'emplo_job', 'emplo_status'];
}
