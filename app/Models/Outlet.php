<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $primaryKey ='id';
    public $incrementing = true;
    protected $table ='outlet';
    protected $fillable = ['nama','alamat','tlp'];

    public function paket()
    {
        return $this->belongsTo(paket::class);
    }

}