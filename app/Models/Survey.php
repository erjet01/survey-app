<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'customer_surveys';

    protected $fillable = [
        'name',
        'age_range',
        'gender',
        'satisfaction_score',
        'feedback',
        'ip_address',
        'user_agent',
    ];
}
