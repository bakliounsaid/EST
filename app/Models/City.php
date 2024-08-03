<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $timestamps = false; // Disable timestamps

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ar_name',
        'fr_name',
        'state_id',
    ];

    /**
     * Get the state that owns the city.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function matches()
    {
        return $this->hasMany(FootballMatch::class);
    }

}
