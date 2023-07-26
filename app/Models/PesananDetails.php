<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetails extends Model
{
    public function barang()
	{
<<<<<<< HEAD
	      return $this->belongsTo('App\Barang','barang_id', 'id');
=======
	      return $this->belongsTo('App\Models\Barang','barang_id', 'id');
>>>>>>> 4ce0b05afcf35b8e19b2398bcda9d6ba15252bc2
	}

	public function pesanan()
	{
<<<<<<< HEAD
	      return $this->belongsTo('App\Pesanan','pesanan_id', 'id');
=======
	      return $this->belongsTo('App\Models\Pesanan','pesanan_id', 'id');
>>>>>>> 4ce0b05afcf35b8e19b2398bcda9d6ba15252bc2
	}
}
