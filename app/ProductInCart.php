<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInCart extends Model
{
    //Aca productInCart va a tener products
    public function product () {
      return $this->belongsTo("App\Product")
    }
}
