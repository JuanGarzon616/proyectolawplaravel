<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'document',
        'names',
        'last_names',
        'direcction',
        'tellephone1',
        'telephone2',
        'mail',
        'password',
        'token',
        'fk_document_type_id',
        'fk_rol_id',
        'fk_municipality_id'
    ];
    protected $hidden = ['password','token'];

    public function documenType()
    {
        return $this->belongsTo(document_type::class,'fk_document_type_id');
    }
    public function rol()
    {
        return $this->belongsTo(rol::class,'fk_rol_id');
    }
    public function municipality()
    {
        return $this->belongsTo(municipality::class,'fk_municipality_id');
    }
}
