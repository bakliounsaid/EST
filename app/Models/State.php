<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;


    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'ar_name',
        'fr_name',
    ];
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
