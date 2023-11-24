<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $table ='presensis';
    protected $fillable =[
        'user_id',
        'nis',
        'kelas',
        'tanggal_masuk',
        'jenis_kelamin',
        'jurusan',
        'keterangan'

    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');
    }
}
