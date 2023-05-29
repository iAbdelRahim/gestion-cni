<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mere extends Model
{
    protected $table = 'MERE';
    protected $primaryKey = 'ID_MERE';
    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'ID_MERE' => 'integer',
        'ID_profession' => 'integer',
        'NOM_MERE' => 'string',
        'PRENOM_MERE' => 'string',
        'DATE_NAISSANCE_MERE' => 'date',
    ];

    public function profession()
    {
        return $this->belongsTo(Profession::class, 'ID_profession');
    }

    public function enrolers()
    {
        return $this->hasMany(Enroler::class, 'ID_MERE');
    }
}
