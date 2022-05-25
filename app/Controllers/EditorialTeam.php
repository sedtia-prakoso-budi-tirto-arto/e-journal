<?php

namespace App\Controllers;

class EditorialTeam extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('editorial_team');
        echo view('template/sidebar');
        echo view('template/footer');
        return;
    }
}
