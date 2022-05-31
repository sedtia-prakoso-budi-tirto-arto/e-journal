<?php

namespace App\Controllers;

class Editor extends BaseController
{
    public function index()
    {
        echo view('template/header_editor');
        echo view('editor');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }
}
