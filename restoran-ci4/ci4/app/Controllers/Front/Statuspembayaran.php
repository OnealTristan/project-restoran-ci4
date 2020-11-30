<?php namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Menu_M;

class Statuspembayaran extends BaseController
{
	public function index()
	{
        $idpel = session()->get('idpelanggan');

        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM vorder WHERE idpelanggan=$idpel AND status=0 ORDER BY tglorder DESC");
        $orderdetail = $query->getResultArray();
        $cart = \Config\Services::cart();

        $data = [
            'judul' => "STATUS PEMBAYARAN",
            'orderdetail'  => $orderdetail,
            'cart' => $cart->contents(),
			'total' => $cart->total(),
        ];
        return view('Front/Statuspembayaran',$data);
        
	}

	//OKKY FIRMANSYAH RAMADHAN

}