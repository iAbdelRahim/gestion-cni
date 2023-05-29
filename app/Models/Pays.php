<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $table = 'PAYS';
    protected $primaryKey = 'ID_PAYS';
    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'ID_PAYS' => 'string',
        'LIB_PAYS' => 'string',
    ];

    public function enrolers()
    {
        return $this->hasMany(Enroler::class, ['ID_PAYS', 'LIB_PAYS']);
    }
}
