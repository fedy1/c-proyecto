<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable=[
        'NIT',
        'name',
        'legalRepresentative',
        'email',
        'municipality_code',
        'economic_activity_code'
    ];

    public function municipality(){
        return $this->belongsTo(Municipality::class, 'municipality_code', 'id');
    }
    public function economic_activity(){
        return $this->belongsTo(Economic_activity::class, 'economic_activity_code', 'id');
    }
}
