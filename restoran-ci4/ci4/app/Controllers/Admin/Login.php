<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User_M;

class Login extends BaseController
{
	public function index()
	{
        $data = [];
        if ($this->request->getMethod() == 'post') {
           $email = $this->request->getPost('email');
           $password = $this->request->getPost('password');

           $model = new User_M();
           $user = $model->where(['email'=>$email,'aktif'=>1])->first();

           if (empty($user)) {
                $data['info'] = "Email Salah !!!";
           } else {
              if (password_verify($password,$user['password'])) {
                $this->setSession($user);
                return redirect()->to(base_url('/admin'));
              } else {
                $data['info'] = "Password Salah !!!";
              }
           }
        }
        

		return view('Admin/Login',$data);
    }
    
    public function setSession($user)
    {
        $data = [
            'namaadmin' => $user['user'],
            'emailadmin' => $user['email'],
            'leveladmin' => $user['level'],
            'loggedIn'  => true
        ];

        session()->set($data);
    }

    public function logout()
    {
      $session = \Config\Services::session();
        $session->remove('namaadmin');
        $session->remove('emailadmin');
        $session->remove('leveladmin');

        return redirect()->to(base_url('/admin/login'));
    }

	//OKKY FIRMANSYAH RAMADHAN

}
