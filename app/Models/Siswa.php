<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
   
    protected $fillable = ['id','nama','kelas'];
    public $timestamps = true;

    public function tabungan()
    {
        return $this->hasMany(Siswa::class);
    }
}
