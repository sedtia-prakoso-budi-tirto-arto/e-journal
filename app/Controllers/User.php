<?php

namespace App\Controllers;

class User extends BaseController
{
    public function email()
    {
        echo view('template/header_editor');
        echo view('user_email');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }
}
