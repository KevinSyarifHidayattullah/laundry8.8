<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $primaryKey ='id';
    public $incrementing = true;
    protected $table ='paket';
    protected $fillable = ['outlet_id','jenis','nama_paket','harga'];

    public function outlet()
    {
        return $this->belongsTo(outlet::class);
    }
}
