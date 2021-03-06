<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'proveedores';
    public $timestamps = true;

    public function equipo() {
        return $this->hasMany(Equipos::class);
    }
}
