<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class response extends Model
{
    use HasFactory;
    protected $table = 'responses';
    protected $fillable = [
        'response_pqr',
        'fk_pqr_id'
        ];

    public function pqr(){
        return $this->belongsTo(pqr::class,'fk_pqr_id');
    }
    public function attachments()
    {
        return $this->hasMany(attachment::class,'fk_pqr_id');
    }
}
