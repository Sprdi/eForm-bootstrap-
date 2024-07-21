<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'nik',
        'email',
        'divisi',
        'grup',
        'kebutuhan',
        'akses',
        'koneksiAplikasi',
        'mulai',
        'sampai',
        'ipSource',
        'ipDestination',
        'port',
        'initiateConnection',
        'lampiran',
    ];
}
