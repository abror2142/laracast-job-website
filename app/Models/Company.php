<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Job;
use App\Models\User;


class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $guarded = [];
    
    public function jobs() {
        return $this->hasMany(Job::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
