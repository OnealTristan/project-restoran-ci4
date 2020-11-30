<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User_M;

class User extends BaseController
{
    protected $session = null;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $pager = \Config\Services::pager();
		$model = new User_M();

		$data = [
			'judul' => 'DATA USER',
			'user' => $model->paginate(4, 'page'),
			'pager' => $model->pager
		];

		echo view("Admin/User/Select", $data);
    }

    public function create()
    {
        $data = [
            'level'  => ['Admin','Koki','Kasir'],
            'judul' => "TAMBAH USER"
        ];

        return view("Admin/User/Insert",$data);
    }

    public function insert()
    {
        $model = new User_M();

        if (isset($_POST['password'])) {
            $data = [
                'user'  => $_POST['user'],
                'email'  => $_POST['email'],
                'password'  => password_hash($_POST['password'],PASSWORD_DEFAULT),
                'level'  => $_POST['level'],
                'aktif' => 1
            ];

            if ($model->insert($data) === false) {
                $error = $model->errors();
                session()->setFlashdata('info', $error['user']);
                return redirect()->to(base_url("/admin/user/create"));
            } else {
                return redirect()->to(base_url("/admin/user"));
            }
        }
        
    }

    public function delete($id = null)
    {
        $model = new User_M();
		$model->delete($id);

		return redirect()->to(base_url("/admin/user"));
    }

    public function update($id = null, $isi = 1)
    {
        $model = new User_M();
        if ($isi == 0) {
            $isi = 1;
        } else {
            $isi = 0;
        }

        $data = [
            'aktif' => $isi
        ];

        $model->update($id,$data);
        return redirect()->to(base_url("/admin/user"));
    }

    public function find($id = null)
	{
		$model = new User_M();
		$user = $model->find($id);

		$data = [
			'judul' => 'UPDATE DATA',
            'user' => $user,
            'level'  => ['Admin','Koki','Kasir']
		];

		return view("Admin/User/Update", $data);
    }
    
    public function ubah()
    {
        $id = $_POST['iduser'];

        $data = [
            'email' => $_POST['email'],
            'level' => $_POST['level']
        ];

        $model = new User_M();
        if ($model->update($id,$data) === false) {
            $error = $model->errors();
			session()->setFlashdata('info', $error);
            return redirect()->to(base_url("/admin/user/find/$id"));
        } else {
            return redirect()->to(base_url("/admin/user"));
        }
        

    }

    


    //OKKY FIRMANSYAH RAMADHAN

}