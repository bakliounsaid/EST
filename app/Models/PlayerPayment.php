<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerPayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cost',
        'type',
        'description',
    ];

    /**
     * Get the player associated with the payment.
     */
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
