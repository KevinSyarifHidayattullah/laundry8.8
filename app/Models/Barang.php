<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $primaryKey ='id';
    public $incrementing = true;
    protected $table ='barang';
    protected $fillable = ['nama_barang','merk_barang','qty','kodisi','tanggal_pengadaan'];
}
