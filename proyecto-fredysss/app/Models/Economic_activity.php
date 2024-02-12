<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Economic_activity extends Model
{
    use HasFactory;

    protected $fillable =[
        'code',
        'name'
    ];

    public function companies(){
        return $this->hasMany(Company::class, 'company_id', 'code');
    }
}
