<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('section_policies');
        echo view('template/sidebar');
        echo view('template/footer');
        return;
    }
}
