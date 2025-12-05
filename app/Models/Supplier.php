<?php

use Illuminate\Database\Eloquent\Model;
    class Suppllier extends Model{
        protected $fillable = ['name','phone','address'];

        public function products(){
            return $this->hasMany(Product::class);
        }
    }
?>
