<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table = 'profession';
    protected $primaryKey = 'ID_profession';
    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'ID_profession' => 'integer',
        'LIB_PROFESSION' => 'string',
    ];

    public function enrolers()
    {
        return $this->hasMany(Enroler::class, 'ID_profession');
    }

    public function meres()
    {
        return $this->hasMany(Mere::class, 'ID_profession');
    }

    public function peres()
    {
        return $this->hasMany(Pere::class, 'ID_profession');
    }
}
