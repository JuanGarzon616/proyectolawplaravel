<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $table='bills';
    protected $primaryKey="id";
    protected $fillable=[
        'fk_business_id',
        'fk_membership_id',
        'fk_payment_id'
    ];


    public function business()
    {
        return $this->belongsTo(business::class,'fk_business_id');
    }
    public function payments()
    {
        return $this->belongsTo(payment::class,'fk_payment_id');
    }
    public function membership()
    {
        return $this->belongsTo(membership::class,'fk_membership_id');
    }
}
