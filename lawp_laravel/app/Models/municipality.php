<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipality extends Model
{
    use HasFactory;
    protected $table = 'municipalities';
    protected $primaryKey = 'id';
    protected $fillable = [
      'name',
      'fk_departaments_id'
    ];

    public function departaments()
    {
        return $this->belongsTo(departament::class,'fk_departaments_id');
    }
}
