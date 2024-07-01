<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;

    protected $fillable = ['id','jumlah','tanggal','id_siswa'];
    public $timestamps = true;

    public function siswa()
    {
        return $this->BelongsTo(siswa::class, 'id_siswa');
    }
}
