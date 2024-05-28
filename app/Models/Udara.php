<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Udara extends Model
{
    protected $table = 'udaras';
    protected $guarded = [];
    use HasFactory;
    public function getRandomFloat($min, $max) {
        return $min + mt_rand() / mt_getrandmax() * ($max - $min);
    }
}
