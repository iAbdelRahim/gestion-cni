<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $table = 'PROFFESSION';
    protected $primaryKey = 'ID_PROFFESSION';
    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'ID_PROFFESSION' => 'integer',
        'LIB_PROFESSION' => 'string',
    ];

    public function enrolers()
    {
        return $this->hasMany(Enroler::class, 'ID_PROFFESSION');
    }

    public function meres()
    {
        return $this->hasMany(Mere::class, 'ID_PROFFESSION');
    }

    public function peres()
    {
        return $this->hasMany(Pere::class, 'ID_PROFFESSION');
    }
}
