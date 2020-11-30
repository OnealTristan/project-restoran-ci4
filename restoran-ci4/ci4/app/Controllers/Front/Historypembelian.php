<?php namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Menu_M;

class Historypembelian extends BaseController
{
	public function index()
	{
        $idpel = session()->get('idpelanggan');

        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM vorderdetail WHERE idpelanggan=$idpel AND status=1 ORDER BY tglorder DESC");
        $orderdetail = $query->getResultArray();
        $cart = \Config\Services::cart();

        $data = [
            'judul' => "HISTORY PEMBELIAN",
            'orderdetail'  => $orderdetail,
            'cart' => $cart->contents(),
			'total' => $cart->total(),
        ];
        return view('Front/Historypembelian',$data);
	}

	//OKKY FIRMANSYAH RAMADHAN

}