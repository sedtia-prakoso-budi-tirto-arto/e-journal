<?php

namespace App\Controllers;

class Search extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('search');
        echo view('template/sidebar');
        echo view('template/footer');
        return;
    }
}
