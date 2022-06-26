<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
  	//ini nama table
      protected $table = 'province';
      //ini primary key 
      protected $primaryKey = 'kode';
      //ini nama field
      protected $fillable = [
          'kode','nama'
      ];
      public $timestamps = false;
}
