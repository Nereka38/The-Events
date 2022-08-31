<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    protected $fillable = [
        'name', 'slug', 'description',
    ];

    public $timestamps = false;

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
