<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public $timestamp = false;

    public function pqr(){
        return $this->hasMany(pqr::class);
    }
}
