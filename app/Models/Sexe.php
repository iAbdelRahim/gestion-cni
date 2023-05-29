<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexe extends Model
{
    protected $table = 'SEXE';
    protected $primaryKey = 'ID_SEXE';
    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'ID_SEXE' => 'string',
        'LIBELLE_SEXE' => 'string',
    ];

    public function enrolers()
    {
        return $this->hasMany(Enroler::class, 'ID_SEXE');
    }
}
