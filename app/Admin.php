<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	//ini nama table
    protected $table = 'admin';
    //ini primary key 
    protected $primaryKey = 'id';
    //ini nama field
    protected $fillable = [
    	'username','password'
    ];
    public function guest() {
    	return $this->hasOne('App\Admin','id','id');
    }

}
