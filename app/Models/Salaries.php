<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'amounts',
        'salary_date',
        'salary_month',
        'salary_year',
        
    ];
}
