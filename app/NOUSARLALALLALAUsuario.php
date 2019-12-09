<?php
// 5- paso se creo el model Usuario a traves de la terminal con php artisan make:model Usuario -r para que ademas me creo el paso 6 que es el controller y me cree todos los metodos y funciones.

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $table ="usuario";
    public $primarykey="id";
    public $timestamps =false;
    public $guarded = [];
}
