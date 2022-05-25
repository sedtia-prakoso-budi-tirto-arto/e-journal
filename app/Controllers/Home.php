<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('template/body');
        echo view('template/sidebar');
        echo view('template/footer');
        return;
    }
}
