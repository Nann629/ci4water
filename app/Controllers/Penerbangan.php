<?php

namespace App\Controllers;

use App\Models\penerbanganModel;

class Penerbangan extends BaseController
{
    protected $rute;
    public function __construct()
    {
        $this->rute = new penerbanganModel();
    }

    public function index()
    {
        $rut = $this->rute->select('rute.*, transportasi.code')->join('transportasi', "transportasi.idtransportasi=rute.id_trans")->findAll();
        $data = [
            'title' => 'Penerbangan',
            'rute' => $rut,
        ];

        return view('penerbangan/home', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getPost('id_trans'), '-', true);
        $this->rute->save([
            'depart' => $this->request->getPost('depart'),
            'rute_from' => $this->request->getPost('rute_from'),
            'rute_to' => $this->request->getPost('rute_to'),
            'price' => $this->request->getPost('price'),
            'id_trans' => $this->request->getPost('id_trans'),
            'slug' => $slug,
        ]);

        return redirect()->to('/penerbangan');
    }

    public function delete($id)
    {
        $this->rute->delete($id);
        return redirect()->to('/penerbangan');
    }

    // public function update($idrute)
    // {
    // }
}
