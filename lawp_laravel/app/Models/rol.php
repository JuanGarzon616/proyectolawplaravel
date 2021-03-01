<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    use HasFactory;
    protected $table = 'rols';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description'
    ];

    public function user()
    {
        return $this->hasMany(user::class);
    }
}
