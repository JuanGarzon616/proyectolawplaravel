<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable implements JWTSubject
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
        'image',
        'mail',
        'password',
        'token',
        'fk_document_type_id',
        'is_admin',
        'fk_municipality_id'
    ];
    protected $hidden = ['password','token'];

    public function documenType()
    {
        return $this->belongsTo(document_type::class,'fk_document_type_id');
    }

    public function municipality()
    {
        return $this->belongsTo(municipality::class,'fk_municipality_id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
