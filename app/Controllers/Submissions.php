<?php

namespace App\Controllers;

class Submissions extends BaseController
{
    public function submissionsUnassigned()
    {
        echo view('template/header');
        echo view('unassigned');
        echo view('template/sidebar');
        echo view('template/footer');
        return;
    }

    public function submissionsInReview()
    {
        echo view('template/header');
        echo view('archives');
        echo view('template/sidebar');
        echo view('template/footer');
        return;
    }
}
