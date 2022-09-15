<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bixmodel;

class Bixcontroller extends BaseController
{
    public function load_base($content)
    {
        $data['content'] = $content;
        return view('BixView/Base.php', $data);
    }

    public function index()
    {
        $data = array();
        $content = $this->get_page_login();
        return $this->load_base($content);
    }

    public function get_page_login()
    {
        return view('BixView/Login.php');
    }

    public function ajax_login()
    {
        $bixModel = new BixModel();
        $post = $_POST;
        $results = $bixModel->get_user($post['username']);
        if (count($results) == 1) {
            $result = $results[0];
            if ($post['password'] == $result['password']) {
                echo 'ok';
            } else {
                echo 'password sbagliata.';
            }
        }
    }
    public function Dashboard()
    {
        return view('BixView/Dashboard.php');
    }

    public function Results()
    {
        return view('BixView/Results.php');
    }

    public function Test_template()
    {
        return view('BixView/Test_template.php');
    }

    public function  ajax_dashboard()
    {
        return view('BixView/Login.php');
    }

    public function ajax_dashboard2()
    {
        return view('BixView/Results.php');
    }

    public function ajax_results()
    {
        return view('BixView/Login');
    }

    public function ajax_results2()
    {
        return view('BixView/Dashboard');
    }
}
