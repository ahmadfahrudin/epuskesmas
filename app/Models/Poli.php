<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function pengunjung()
    {
        return $this->hasMany(Pengunjung::class);
    }
}
