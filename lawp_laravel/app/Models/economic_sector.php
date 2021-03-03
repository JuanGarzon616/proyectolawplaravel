<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class economic_sector extends Model
{
    use HasFactory;
    protected $table = 'economic_sectors';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
    public $timestamps = false;


    public function businesses()
    {
        return $this->hasMany(business::class);
    }
}
