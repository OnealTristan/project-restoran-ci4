<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Orderdetail_M;

class Orderdetail extends BaseController
{
	public function index()
	{
		$pager = \Config\Services::pager();
		$model = new Orderdetail_M();

		$data = [
			'judul' => 'DATA RINCIAN ORDER',
			'orderdetail' => $model->paginate(4, 'page'),
			'pager' => $model->pager
		];

		echo view("Admin/Orderdetail/Select", $data);
    }

    public function cari()
    {
        $db = \Config\Database::connect();
        if (isset($_POST['awal'])) {
            $awal = $_POST['awal'];
            $sampai = $_POST['sampai'];

            $sql = "SELECT * FROM vorderdetail WHERE tglorder BETWEEN '$awal' AND '$sampai' ";
            $result = $db->query($sql);
            $row = $result->getResult('array');

            $data = [
                'judul' => 'DATA RINCIAN ORDER',
                'orderdetail' => $row
            ];
    
            echo view("Admin/Orderdetail/Cari", $data);
        }
    }
    

	//OKKY FIRMANSYAH RAMADHAN

}
