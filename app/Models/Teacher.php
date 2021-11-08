<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $with = ['position'];

    public function position()
    {
        return $this->belongsTo(Position::class,'position_id');
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class,'gender_id');
    }
}
