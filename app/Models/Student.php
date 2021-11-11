<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    protected $with = ['religion'];

    public function religion()
    {
        return $this->belongsTo(Religion::class,'religion_id');
    }


}
