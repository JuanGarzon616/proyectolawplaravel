<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membership extends Model
{
    use HasFactory;
    protected $table = 'memberships';
    protected $fillable = [
            'name',
            'duration',
            'cost'
        ];

    public $timestamps = false;

    public function bills(){
        return $this->hasMany(bill::class);
    }
}
