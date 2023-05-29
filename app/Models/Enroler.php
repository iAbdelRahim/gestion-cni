<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroler extends Model
{
    protected $table = 'ENROLER';
    protected $primaryKey = 'ID_ENROLEMENT';
    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'ID_ENROLEMENT' => 'string',
        'ID_PERE' => 'integer',
        'ID_MERE' => 'integer',
        'ID_SEXE' => 'string',
        'ID_PROFFESSION' => 'integer',
        'ID_PAYS' => 'string',
        'LIB_PAYS' => 'string',
        'NOM' => 'string',
        'PRENOM' => 'string',
        'HEURE_NAISSANCE' => 'time',
        'LIEU_NAISSANCE' => 'string',
        'NNI' => 'string',
        'TAILLE' => 'integer',
        'LIEN_PHOTO' => 'string',
        'LIEN_EMPREINTE' => 'string',
        'LIEN_SIGNATURE' => 'string',
        'VISA' => 'string',
        'SIGNATAIRE' => 'string',
        'DATE_EMISSION' => 'date',
        'DATE_EXPIRATION' => 'date',
        'DATE_ENROLEMENT' => 'date',
        'DATE_NAISSANCE' => 'date',
    ];

    public function pere()
    {
        return $this->belongsTo(Pere::class, 'ID_PERE');
    }

    public function mere()
    {
        return $this->belongsTo(Mere::class, 'ID_MERE');
    }

    public function sexe()
    {
        return $this->belongsTo(Sexe::class, 'ID_SEXE');
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class, 'ID_PROFFESSION');
    }

    public function pays()
    {
        return $this->belongsTo(Pays::class, ['ID_PAYS', 'LIB_PAYS']);
    }
}
