<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'name',
        'description',
        'objective',
    ];
    public function players()
    {
        return $this->hasMany(Player::class);
    }
    public function matches()
    {
        return $this->hasMany(FootballMatch::class);
    }
    public function eventCosts()
    {
        return $this->hasMany(EventCost::class);
    }
}
