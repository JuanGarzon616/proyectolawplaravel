<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pqr;

class attachment extends Model
{
    use HasFactory;
    protected $table='attachments';
    protected $primaryKey="id";
    protected $fillable=[
        'url',
        'archive',
        'fk_pqr_id'
    ];


    public function pqr()
    {
        return $this->hasOne(pqr::class,'fk_pqr_id');
    }

}
