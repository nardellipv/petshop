<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'provider', 'internalCode', 'image', 'buyPrice', 'sellPrice', 'discount', 'quantity', 'expire', 'post', 'slug', 'shop_id'
      ];
  
      public function Shop()
      {
          return $this->belongsTo(Shop::class);
      }

      public function Sale()
      {
          return $this->belongsTo(Sale::class);
      }
}
