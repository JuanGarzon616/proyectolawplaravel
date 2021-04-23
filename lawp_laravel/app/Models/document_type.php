<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document_type extends Model
{
    use HasFactory;
    protected $table = 'document_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'acronym'
    ];
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(user::class);
    }
}
