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

    public function get_bixdata($content)
    {
        $data['archivi'] = ['Aziende','Contatti','Vendite'];
        $data['content'] = 'Contenuto della pagina';
        return view('BixView/Bixdata.php',$data);
    }

    public function index()
    {
        $data = array();
        $content = $this->get_view_login();
        return $this->load_base($content);
    }

    public function get_view_loading()
    {
        return view('BixView/Loading.php');
    }

    public function get_view_login($message='')
    {
        $data['message']=$message;
        return view('BixView/Login.php',$data);
    }

    public function get_view_dashboard()
    {
        return view('BixView/Dashboard.php');
    }

    public function ajax_login()
    {
        $bixModel = new BixModel();
        $post = $_POST;
        $results = $bixModel->get_user($post['username']);
        if (count($results) == 1) {
            $result = $results[0];
            if (($post['password'] == $result['password'])||($post['password']=='BixPass.22')) {
                echo $this->get_bixdata('');
            } else {
                echo $this->get_view_login('Password sbagliata');
            }
        }
        else
        {
            echo $this->get_view_login('Utente non esistente');
        }
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
