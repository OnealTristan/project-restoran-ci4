<?php

namespace App\Models;

use CodeIgniter\Model;

class Menu_M extends Model
{

    protected $table = 'tblmenu';
    protected $allowedFields = ['idkategori', 'menu', 'gambar', 'harga'];
    protected $primaryKey = 'idmenu';

    protected $validationRules    = [
        'menu'      => 'alpha_numeric_space|min_length[3]|is_unique[tblmenu.menu]',
        'harga'      => 'numeric'
    ];
    protected $validationMessages = [
        'menu'      => [
            'alpha_numeric_space'   => 'Tidak Boleh Memakai Simbol',
            'min_length'    => 'Minimal 3 Huruf',
            'is_unique'     => 'Ada Data Yang Sama'
        ],
        'harga'      => [
            'numeric'   => 'Harus Angka',
        ],
    ];
    
    public function getProduct($id)
    {
        return $this->db->table($this->table)->where('idmenu', $id)->get()->getRowArray();
    }

    //OKKY FIRMANSYAH RAMADHAN
}