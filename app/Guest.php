<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guests';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'firstname','lastname','organization','address','province','city','phone'
    ];
    public function admin() {
    	return $this->hasOne('App\Admin','id','id');
    }

}
