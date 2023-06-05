<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
            'name','alamat','telepon','tanggal_lahir',
        ];

    public function pasiens(){
        return $this ->hasMany(Pasien::class);
    }
}
