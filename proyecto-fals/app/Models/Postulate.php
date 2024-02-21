<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulate extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'vacancy_id'
    ];

    public function candidate(){
        return $this->belongsTo(Candidate::class, 'candidate_id', 'id');
    }
    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}

