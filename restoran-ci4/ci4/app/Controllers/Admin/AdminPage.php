<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Adminpage extends BaseController
{
	public function index()
	{
		$data = [
			'judul'	=> "ADMIN PAGE"
		];
		return view('Template/Admin',$data);
	}

	//OKKY FIRMANSYAH RAMADHAN

}
