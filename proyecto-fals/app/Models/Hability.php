<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hability extends Model
{
    use HasFactory;

    protected $fillable =[
        'description'
    ];

    public function ocupation(){
        return $this->belongsTo(Ocupation::class, 'ocupation_id', 'id');
    }
    public function vacancies(){
        return $this->hasMany(Vacancy::class, 'vacancy_id', 'id');
    }
}
