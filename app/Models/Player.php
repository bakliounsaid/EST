<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'first_name',
        'last_name',
        'blood_category',
        'city_id',
        'date_of_birth',
        'age',
        'position',
        'category_id',
        'has_insurance',
        'phone',
        'parent_phone',
        'email',
        'number',
        'school_level',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function trainingSessions()
    {
        return $this->belongsToMany(TrainingSession::class, 'player_sessions');
    }
    
}

