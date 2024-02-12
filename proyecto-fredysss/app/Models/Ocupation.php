<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocupation extends Model
{
    use HasFactory;
    protected $fillable =[
        'code',
        'name'
    ];

    public function tasks(){
        return $this->hasMany(Task::class, 'task_id', 'id');
    }
    public function habilities(){
        return $this->hasMany(Hability::class, 'hability_id', 'id');
    }
    public function job_positions(){
        return $this->hasMany(Job_position::class, 'job_position_id', 'id');
    }
    public function vacancies(){
        return $this->hasMany(Vacancy::class, 'vacancy_id', 'id');
    }
}
