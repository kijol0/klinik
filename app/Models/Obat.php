<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    protected $fillable = [
            'name','harga'
        ];

    public function obats(){
        return $this ->hasMany(Obat::class);
    }
}
