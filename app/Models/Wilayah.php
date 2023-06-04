<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{

    protected $guarded = ['id'];
    protected $fillable = [
            'name',
        ];
    use HasFactory;
    public function wilayahs(){
        return $this ->hasMany(Wilayah::class);
    }
}
