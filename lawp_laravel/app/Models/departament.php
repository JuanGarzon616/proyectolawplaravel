<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departament extends Model
{
    use HasFactory;
    protected $table = 'name';
    protected $primaryKey = 'id';
    protected $fillable = 'name';

    public function municipalities()
    {
        return $this->hasMany(municipality::class);
    }
}
