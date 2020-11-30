<?php

namespace App\Models;
use CodeIgniter\Model;

class User_M extends Model
{

    protected $table = 'tbluser';
    protected $allowedFields = ['user','email','password','level','aktif'];
    protected $primaryKey = 'iduser';

    protected $validationRules    = [
        'user'      => 'alpha_numeric_space|min_length[3]|is_unique[tbluser.user]',
        'email'      => 'valid_email|is_unique[tbluser.email]'
    ];
    protected $validationMessages = [
        'user'      => [
            'alpha_numeric_space'   => 'Tidak Boleh Memakai Simbol',
            'min_length'    => 'Minimal 3 Huruf',
            'is_unique'     => 'Ada User Yang Sama'
        ],
        'email'      => [
            'valid_email'     => 'Email Salah !'
        ],
    ];

    //OKKY FIRMANSYAH RAMADHAN

}

?>