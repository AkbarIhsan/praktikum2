<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';

    protected $fillable = [
        'nama',
        'gender',
        'alamat',
        'username',
        'email',
        'password'
    ];

    public static function getByName($name){
        return mahasiswa::where([
            'name' => $name
        ])->first();
    }
}
