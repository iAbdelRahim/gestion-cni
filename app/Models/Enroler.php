<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroler extends Model
{
    protected $table = 'ENROLER';
    protected $primaryKey = 'id_enrolement';
    public $timestamps = false;

    protected $fillable = [
        'id_enrolement',
        'ID_PERE',
        'ID_MERE',
        'ID_SEXE',
        'ID_profession',
        'ID_PAYS',
        'LIB_PAYS',
        'NOM',
        'PRENOM',
        'HEURE_NAISSANCE',
        'LIEU_NAISSANCE',
        'NNI',
        'TAILLE',
        'LIEN_PHOTO',
        'LIEN_EMPREINTE',
        'LIEN_SIGNATURE',
        'VISA',
        'SIGNATAIRE',
        'DATE_EMISSION',
        'DATE_EXPIRATION',
        'DATE_ENROLEMENT',
        'DATE_NAISSANCE',
    ];
    

    public function pere()
    {
        return $this->belongsTo(Pere::class, 'id_pere');
    }

    public function mere()
    {
        return $this->belongsTo(Mere::class, 'id_mere');
    }

    public function sexe()
    {
        return $this->belongsTo(Sexe::class, 'ID_SEXE');
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class, 'id_profession');
    }

    public function pays()
    {
        return $this->belongsTo(Pays::class, ['ID_PAYS', 'LIB_PAYS']);
    }
}
