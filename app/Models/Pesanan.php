<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    public function user()
	{
<<<<<<< HEAD
	      return $this->belongsTo('App\User','user_id', 'id');
=======
	      return $this->belongsTo('App\Models\User','user_id', 'id');
>>>>>>> 4ce0b05afcf35b8e19b2398bcda9d6ba15252bc2
	}

	public function pesanan_detail() 
	{
<<<<<<< HEAD
	     return $this->hasMany('App\PesananDetail','pesanan_id', 'id');
=======
	     return $this->hasMany('App\Models\PesananDetail','pesanan_id', 'id');
>>>>>>> 4ce0b05afcf35b8e19b2398bcda9d6ba15252bc2
	}

}