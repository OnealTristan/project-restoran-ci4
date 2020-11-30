<?php

namespace App\Models;
use CodeIgniter\Model;

class Pelanggan_M extends Model
{

    protected $table = 'tblpelanggan';
    protected $primaryKey = 'idpelanggan';
    protected $allowedFields = ['pelanggan', 'alamat', 'telp', 'email', 'password','aktif'];
    
    protected $validationRules    = [
        'email'      => 'min_length[3]|is_unique[tblpelanggan.email]'
    ];
    protected $validationMessages = [
        'email'      =>[
            'min_length'    => 'Minimal 3 Huruf',
            'is_unique'     => 'Ada Email Yang Sama'
        ]
    ];

    //OKKY FIRMANSYAH RAMADHAN

}

?>