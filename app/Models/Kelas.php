<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    public $fillable = ['nip', 'id_prodis', 'nama_kelas'];
    public $timestamps = true;

    public function dosen()
    {
   
        return $this->belongsTo(Dosen::class, 'id_dosens');
    }

    public function prodi()
    {
      
        return $this->belongsTo(Prodi::class, 'id_prodis');
    }


}
