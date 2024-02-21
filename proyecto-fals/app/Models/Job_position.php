<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_position extends Model
{
    use HasFactory;

    protected $fillable =[
        'ocupation_id',
        'name',
        'description'
    ];

    public function ocupation(){
        return $this->belongsTo(Ocupation::class, 'ocupation_id', 'id');
    }
    public function vacancies(){
        return $this->hasMany(Vacancy::class, 'vacancy_id', 'id');
    }
}
