<?php

namespace App\Controllers;

class Reviewer extends BaseController
{
    public function index()
    {
        echo view('reviewer');
        echo view('template/sidebar');
        echo view('template/footer');
        return;
    }
}
