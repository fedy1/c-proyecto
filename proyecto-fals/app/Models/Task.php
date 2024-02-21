<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'ocupation_id',
        'description'
    ];

    public function ocupation(){
        return $this->belongsTo(Ocupation::class, 'ocupation_id', 'id');
    }

    public function vacancies(){
        return $this->hasMany(Vacancy::class, 'vacancy_id', 'id');
    }
}
