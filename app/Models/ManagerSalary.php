<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagerSalary extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'cost',
        'type',
        'descreption'
    ];

    /**
     * Get the manager associated with the salary.
     */
    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }
}
