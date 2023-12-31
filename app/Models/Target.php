<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;
    protected $table = 'target';
    protected $fillable = [
        'daftarproses',
        'tanggal_target',
        'target_quantity'
    ];
    
    public function fproses(){
        return $this->belongsTo(Proses::class, 'daftarproses', 'daftarproses');
    }
}