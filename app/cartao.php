<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartao extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
 
    public function cartao(){

    }
}
