<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paketCucian extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'paket';
    protected $fillable = ['id_outlet','nama_paket', 'jenis', 'harga'];
    
    public function outlet()
    {
        return $this->belongsTo(Outlet::class, 'id_outlet');
    }
}
