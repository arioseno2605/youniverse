<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	//ini nama table
    protected $table = 'city';
    //ini primary key 
    protected $primaryKey = 'kode';
    //ini nama field
    protected $fillable = [
    	'kode','nama'
    ];
    public $timestamps = false;
}
