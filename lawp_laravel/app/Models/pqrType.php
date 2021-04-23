<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pqrType extends Model
{
    use HasFactory;
    protected $table = 'pqr_types';
    //protected $primaryKey = 'id';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function pqr(){
        return $this->hasMany(pqr::class);
    }
}
