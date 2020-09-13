<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
    protected $session=null;

    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

	public function index()
	{
		echo "user";
    }
    
    public function create()
    {
        $session = \Config\Services::session();

        $tbluser = [
            'user' => 'koki',
            'email' => 'koki@gmail.com',
            'level' => 'koki'
        ];

        $this->session->set($tbluser);
    }

    public function read()
    {
        $session = \Config\Services::session();

        echo $this->session->get('user');
        echo "<br>";
        echo $this->session->get('email');
        echo "<br>";
        echo $this->session->get('level');
    }

    public function delete()
    {
        $session = \Config\Services::session();

        $this->session->remove('email');
    }

    public function destroy()
    {
        $session = \Config\Services::session();

        $this->session->destroy();
    }

}
