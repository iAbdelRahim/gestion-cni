<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pere extends Model
{
    protected $table = 'PERE';
    protected $primaryKey = 'ID_PERE';
    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'ID_PERE' => 'integer',
        'ID_profession' => 'integer',
        'NOM_PERE' => 'string',
        'PRENOM_PERE' => 'string',
        'DATE_NAISSANCE_PERE' => 'date',
    ];

    public function profession()
    {
        return $this->belongsTo(Profession::class, 'ID_profession');
    }

    public function enrolers()
    {
        return $this->hasMany(Enroler::class, 'ID_PERE');
    }
}
