<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    protected $with = ['religion'];

    
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('nisn','like','%'.$search.'%');
        });
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class,'religion_id');
    }


}
