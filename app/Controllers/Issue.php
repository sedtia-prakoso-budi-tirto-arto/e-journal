<?php

namespace App\Controllers;

class Issue extends BaseController
{
    public function current()
    {
        echo view('template/header');
        echo view('current');
        echo view('template/sidebar');
        echo view('template/footer');
        return;
    }

    public function archives()
    {
        echo view('template/header');
        echo view('archives');
        echo view('template/sidebar');
        echo view('template/footer');
        return;
    }
}
