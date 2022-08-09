<?php

namespace App\Controllers;

use App\Models\tiketModel;

class Tiket extends BaseController
{
    protected $tiket;
    public function __construct()
    {
        $this->tiket = new tiketModel();
    }

    public function index()
    {
        $tkt = $this->tiket->findAll();
        $data = [
            'title' => 'Tiket',
            'tiket' => $tkt,
        ];
        return view('tiket/home', $data);
    }

    // public function index()
    // {
    //     $tik = $this->rute->select('rute.*, transportasi.code')->join('transportasi', "transportasi.idtransportasi=rute.id_trans")->findAll();
    //     $data = [
    //         'title' => 'Tiket',
    //         'tiket' => $tik,
    //     ];

    //     return view('tiket/home', $data);
    // }
    public function save()
    {
        // $slug = url_title($this->request->getPost('code'), '-', true);
        $this->tiket->save([
            'reservasi_code' => $this->request->getPost('reservasi_code'),
            'price' => $this->request->getPost('price'),
            'depart' => $this->request->getPost('depart'),
            'status' => $this->request->getPost('status'),
            // 'slug' => $slug,
        ]);

        return redirect()->to('/tiket');
    }
    public function delete($id)
    {
        $this->tiket->delete($id);
        return redirect()->to('/tiket');
    }
    public function edit($id)
    {
        $this->tiket->edit($id);
        return redirect()->to('/tiket');
    }
}
