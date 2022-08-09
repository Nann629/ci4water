<?php

namespace App\Controllers;

use App\Models\pesawatModel;

class Pesawat extends BaseController
{
    protected $pesawat;
    public function __construct()
    {
        $this->pesawat = new pesawatModel();
    }

    public function index()
    {
        $pswt = $this->pesawat->findAll();
        $data = [
            'title' => 'Pesawat',
            'pesawat' => $pswt,
        ];

        return view('pesawat/home', $data);
    }
    public function save()
    {
        // $slug = url_title($this->request->getPost('code'), '-', true);
        $this->pesawat->save([
            'code' => $this->request->getPost('code'),
            'description' => $this->request->getPost('description'),
            // 'slug' => $slug,
        ]);

        return redirect()->to('/pesawat');
    }
    public function delete($id)
    {
        $this->pesawat->delete($id);
        return redirect()->to('/pesawat');
    }
    public function edit($id)
    {
        $this->pesawat->edit($id);
        return redirect()->to('/pesawat');
    }
}
