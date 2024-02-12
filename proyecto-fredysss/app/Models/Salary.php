<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $table='salaries';

    protected $fillable = [
        'name',
        'description'];

    public function vacancies(){
        return $this->hasMany(Vacancy::class, 'vacancy_id', 'id');
    }
}
