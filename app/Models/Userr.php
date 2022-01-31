<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userr extends Model
{
    use HasFactory;

    protected $primaryKey ='id';
    public $incrementing = true;
    protected $table ='userr';
    protected $fillable = ['nama','username','password','id_outlet','role'];
}
