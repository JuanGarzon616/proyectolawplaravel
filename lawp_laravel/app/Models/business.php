<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class business extends Authenticatable implements JWTSubject
{
    use HasFactory;
    protected $table = "businesses";
    protected $primaryKey = "id";
    protected $fillable = [
        'nit',
        'tellephone1',
        'tellephone2',
        'bussiness_name',
        'name',
        'password',
        'mail',
        'token',
        'member_remaining',
        'fk_economic_sector_id',
        'fk_municipality_id',
        'fk_membership_id'
    ];
    protected $hidden = ['password','token'];

    public function economicSectors()
    {
        return $this->belongsTo(economic_sector::class,'fk_economic_sector_id');
    }
    public function municipality()
    {
        return $this->belongsTo(municipality::class,'fk_municipality_id');
    }
    public function pqr()
    {
        return $this->hasMany(pqr::class);
    }
    public function membership()
    {
        return $this->belongsTo(membership::class,'fk_membership_id');
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
