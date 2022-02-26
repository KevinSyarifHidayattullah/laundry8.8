<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    public $incrementing = true;
    protected $table = 'detail_transaksi';
    protected $fillable = ['id_transaksi', 'id_paket', 'qty', 'keterangan'];

    public function transaksi()
    {
        return $this->belongsTo(trasaksi::class, 'id_transaksi');
    }
    public function paketCucian()
    {
        return $this->belongsTo(PaketCucian::class, 'id_paket');
    }
}
