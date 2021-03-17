<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class business extends Model
{
    use HasFactory, hasApiTokens, Notifiable;
    protected $table = "businesses";
    protected $primaryKey = "id";
    protected $fillable = [
        'tellephone1',
        'tellephone2',
        'bussiness_name',
        'name',
        'password',
        'mail',
        'fk_economic_sector_id',
        'fk_municipality_id',
        'fk_membership_id'
    ];
    protected $hidden = 'password';

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
}
