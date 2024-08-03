<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'contract_start',
        'contract_end',
        'category_id',
        'diplome_type',
        'is_active',
        'role',
        'phone',
        'email',
        'address',
        'image',
        'salary'
    ];

    /**
     * Get the category that the manager belongs to.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
