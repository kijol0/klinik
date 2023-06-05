<?php

namespace App\Models;

use App\Models\Tindakan as ModelsTindakan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
            'name','harga'
        ];

    public function tindakans(){
        return $this ->hasMany(Tindakan::class);
    }
}
