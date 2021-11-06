<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $with = ['religion','gender'];

    public function religion()
    {
        return $this->belongsTo(Religion::class,'religion_id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class,'gender_id');
    }
}
