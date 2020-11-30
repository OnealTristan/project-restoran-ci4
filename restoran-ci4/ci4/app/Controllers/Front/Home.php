<?php namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Kategori_M;
use App\Models\Menu_M;

class Home extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
        $query = $db->query('SELECT * FROM tblmenu ORDER BY idmenu DESC LIMIT 10');
        $terbaru = $query->getResultArray();
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
			'judul'	=> "RESTORAN BOY",
			'terbaru' => $terbaru
		];

		return view('Front/Home', $data);
	}


}