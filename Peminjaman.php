<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Inventaris;
use App\Pegawai;

class Peminjaman extends Model
{
    //
	public function inventaris()
    {
    	return $this->belongsTo('App\Inventaris');
    }

    public function pegawai()
    {
    	return $this->belongsTo('App\Pegawai');
    }
}
