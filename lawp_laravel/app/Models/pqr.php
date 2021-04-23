<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pqr extends Model
{
    use HasFactory;
    protected $table = 'pqrs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'affair',
        'description',
        'date',
        'fk_user_id',
        'fk_bussiness_id',
        'fk_pqr_type_id'
    ];

    public function user()
    {
        return $this->belongsTo(user::class,'fk_user_id');
    }
    public function business()
    {
        return $this->belongsTo(business::class,'fk_bussiness_id');
    }
    public function pqrType(){
        return $this->belongsTo(pqrType::class,'fk_pqr_type_id');
    }
}
