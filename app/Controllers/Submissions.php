<?php

namespace App\Controllers;

class Submissions extends BaseController
{
    public function submissionsUnassigned()
    {
        echo view('template/header_editor');
        echo view('submissions_unassigned');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function submissionsInReview()
    {
        echo view('template/header_editor');
        echo view('submissions_inreview');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function submissionsInEditting()
    {
        echo view('template/header_editor');
        echo view('submissions_ineditting');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function submissionsArchives()
    {
        echo view('template/header_editor');
        echo view('submissions_archives');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function Summary12541()
    {
        echo view('template/header_editor');
        echo view('summary_12541');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }
}
