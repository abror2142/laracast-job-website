<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;


class Job extends Model {

    use HasFactory;

    protected $table = 'job_listings';

    protected $guarded = [];

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
