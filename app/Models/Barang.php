<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function pesanan_detail() 
	{
<<<<<<< HEAD
	     return $this->hasMany('App\PesananDetail','barang_id', 'id');
=======
	     return $this->hasMany('App\Models\PesananDetail','barang_id', 'id');
>>>>>>> 4ce0b05afcf35b8e19b2398bcda9d6ba15252bc2
	}
}
