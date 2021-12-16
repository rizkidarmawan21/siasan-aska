<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi_online extends Model
{
    use HasFactory;

	protected $table = 'registrasi_online';    
    protected $fillable = [
    	'siswa_id', 'jalurpendaftaran', 'jenjang', 'nama', 'fasilitas', 'jeniskelamin',
 		'registrasi_online'
    ];


	public function getRegistrasi_online()
	{
		if(!$this->registrasi_online){
			return asset('images/default.jpg');
		}			
		return asset('images/' .$this->registrasi_online);
	}

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }

}
