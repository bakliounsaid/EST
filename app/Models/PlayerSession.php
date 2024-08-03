<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerSession extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function trainingSession()
    {
        return $this->belongsTo(TrainingSession::class);
    }
}

