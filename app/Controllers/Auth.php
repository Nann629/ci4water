<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthAd;

class Auth extends BaseController
{
    public function index()
    {
        echo view('auth_vw');
    }


    public function login(){

        $model = new AuthAd();

        $sesi = session();

        $username = $this->request->getVar('username');
        $paswd = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();

        if(!is_null($data)){
            $pass = $data['password'];
            if(password_verify($paswd, $pass)){
                $data['isLogin'] = true;
                $sesi->set($data);
                return redirect()->to(base_url('home'));
            } else{
                return redirect()->to(base_url('auth'));
            }

            return redirect()->to(base_url('home'));
        }

    }

    public function logout(){

        $session = session();
        $session->destroy();
        return redirect()->to(base_url('auth'));
    }

}
