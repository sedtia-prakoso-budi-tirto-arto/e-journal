<?php

namespace App\Controllers;

class Article extends BaseController
{
    public function view()
    {
        echo view('template/header_editor');
        echo view('article_view');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }
}
