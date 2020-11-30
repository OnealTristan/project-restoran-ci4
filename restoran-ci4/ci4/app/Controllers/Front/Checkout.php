<?php namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Kategori_M;
use App\Models\Menu_M;

class Checkout extends BaseController
{
	public function index()
	{
		$model = new Kategori_M();
		$kategori = $model->findAll();
		$modelmenu = new Menu_M();
		$menu = $modelmenu->findAll();
		$cart = \Config\Services::cart();

		$data = [
			'kategori' => $kategori,
			'menu'	=> $menu,
			'cart' => $cart->contents(),
			'total' => $cart->total(),
			'judul'	=> "CHECKOUT"
		];

		return view('Front/Checkout',$data);
	}

	public function sukses()
	{
		return view('Front/Pembayaransuccess');
	}

	//OKKY FIRMANSYAH RAMADHAN

}
