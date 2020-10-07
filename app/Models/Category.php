<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable = [
       'name'
   ];

   public function products() {
       return $this->hasMany(App\Models\Product::class);
   }

   public function infos() {
       return $this->hasOne(App\Models\Info::class);
   }
}
