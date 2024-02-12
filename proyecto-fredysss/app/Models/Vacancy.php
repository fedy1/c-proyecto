<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table='vacancies';

    protected $fillable = [
        'company_id',
        'description',
        'salary_id',
        'contract_id',
        'task_id',
        'job_position_id',
        'ocupation_id',
        'end_date',
        'avaliable_jobs'];

    public function postulates(){
        return $this->hasMany(Postulate::class, 'vacancy_id', 'id');
    }
    public function company(){
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
    public function salary(){
        return $this->belongsTo(Salary::class, 'salary_id', 'id');
    }
    public function contract(){
        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }
    public function task(){
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }
    public function job_position(){
        return $this->belongsTo(Job_position::class, 'job_position_id', 'id');
    }
    public function ocupation(){
        return $this->belongsTo(Ocupation::class, 'ocupation_id', 'id');
    }
}
