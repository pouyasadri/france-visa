<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultingSubmission extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'service',
        'details',
        'locale',
        'ip_address',
        'user_agent',
    ];
    //
}
