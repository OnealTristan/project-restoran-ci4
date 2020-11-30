<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
	public function read()
	{
		$pager = \Config\Services::pager();
		$model = new Kategori_M();
		$kategori = $model->findAll();

		$data = [
			'judul' => 'DATA KATEGORI',
			'kategori' => $kategori,
		];

		echo view("Admin/Kategori/Select", $data);
	}

	public function create()
	{
		$data = [
			'judul'	=> "TAMBAH KATEGORI"
		];

		echo view("Admin/Kategori/Insert",$data);
	}

	public function insert()
	{
		$model = new Kategori_M();

		if ($model->insert($_POST) === false) {
			$error = $model->errors();
			session()->setFlashdata('info', $error['kategori']);
			return redirect()->to(base_url("/admin/kategori/create"));
		} else {
			return redirect()->to(base_url("/admin/kategori"));
		}
	}

	public function find($id = null)
	{
		$model = new Kategori_M();
		$kategori = $model->find($id);

		$data = [
			'judul' => 'UPDATE DATA',
			'kategori' => $kategori
		];

		return view("Admin/Kategori/Update", $data);
	}

	public function update()
	{
		$model = new Kategori_M();
		$id = $_POST['idkategori'];

		if ($model->save($_POST) === false) {
			$error = $model->errors();
			session()->setFlashdata('info', $error['kategori']);
			return redirect()->to(base_url("/admin/kategori/find/$id"));
		} else {
			return redirect()->to(base_url("/admin/kategori"));
		}
	}

	public function delete($id = null)
	{
		$model = new Kategori_M();
		$model->delete($id);

		return redirect()->to(base_url("/admin/kategori"));
	}

	//OKKY FIRMANSYAH RAMADHAN

}