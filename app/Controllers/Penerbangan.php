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
        // $trans = url_title($this->request->getVar('id_trans'), '-', true);
        $this->rute->save([
            'depart' => $this->request->getVar('depart'),
            'rute_from' => $this->request->getVar('rute_from'),
            'rute_to' => $this->request->getVar('rute_to'),
            'price' => $this->request->getVar('price'),
            'id_trans' => $this->request->getVar('id_trans'),
        ]);

        // $rut = $this->rute->select('rute.*, transportasi.code')->join('transportasi', "transportasi.idtransportasi=rute.id_trans")->findAll();
        // $data = [
        //     'title' => 'Penerbangan',
        //     'rute' => $rut,
        // ];

        // return redirect()->to('/pasien');
        // return view('penerbangan/home', $data);
        return redirect()->to('/penerbangan');
    }
}
