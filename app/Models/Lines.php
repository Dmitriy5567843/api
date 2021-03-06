<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lines extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function stations(){
        return $this->hasMany(Stations::class);
    }

}
