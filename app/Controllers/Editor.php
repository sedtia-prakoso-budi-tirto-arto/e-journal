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

    public function metadata()
    {
        echo view('template/header_editor');
        echo view('editor_metadata');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function selectReviewer()
    {
        echo view('template/header_editor');
        echo view('editor_selectReviewer');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function userProfile()
    {
        echo view('template/header_editor');
        echo view('editor_userProfile');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function emailEditorDecisionComment()
    {
        echo view('template/header_editor');
        echo view('editor_emailEditorDecisionComment');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function viewEditorDecisionComments()
    {
        echo view('template/header_editor');
        echo view('editor_viewEditorDecisionComments');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function createIssue()
    {
        echo view('template/header_editor');
        echo view('editor_createIssue');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function futureIssue()
    {
        echo view('template/header_editor');
        echo view('editor_futureIssue');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function backIssue()
    {
        echo view('template/header_editor');
        echo view('editor_backIssue');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function issueToc()
    {
        echo view('template/header_editor');
        echo view('editor_issueToc');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function issueData()
    {
        echo view('template/header_editor');
        echo view('editor_issueData');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }

    public function issueGalley()
    {
        echo view('template/header_editor');
        echo view('editor_issueGalley');
        echo view('template/sidebar_editor');
        echo view('template/footer');
        return;
    }
}
