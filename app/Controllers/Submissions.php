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

    public function SubmissionSummary12541()
    {
        echo view('template/header_editor');
        echo view('summary_12541');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function SubmissionReview12541()
    {
        echo view('template/header_editor');
        echo view('review_12541');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function SubmissionEditing12541()
    {
        echo view('template/header_editor');
        echo view('editing_12541');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }
}
