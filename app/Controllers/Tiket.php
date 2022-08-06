<?php

namespace App\Controllers;

use App\Models\penerbanganModel;

class Tiket extends BaseController
{
    protected $rute;
    public function __construct()
    {
        $this->rute = new penerbanganModel();
    }
    public function index()
    {
        $rut = $this->rute->findAll();
        $data = [
            'title' => 'Pesanan Tiket',
            'rute' => $rut,
        ];
        return view('tiket/home', $data);
    }
}
