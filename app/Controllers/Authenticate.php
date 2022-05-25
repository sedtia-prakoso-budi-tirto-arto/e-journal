<?php

namespace App\Controllers;

class Authenticate extends BaseController
{
    public function index()
    {
        echo view('login_page');
        echo view('template/footer');
        return;
    }

    public function auth()
    {
        $username = $this->request->getVar('username');
        $katasandi = $this->request->getVar('password');
    }
}
