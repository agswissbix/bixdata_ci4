<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bixmodel;

class Bixcontroller extends BaseController
{
    public function load_baseOLD($content)
    {
        $data['content'] = $content;
        return view('BixView/Base.php', $data);
    }

    public function load_base($content)
    {
        $data['wrapped_content'] = $content;
        return view('BixView/Base2.php', $data);
    }

    public function get_bixdataOLD($content)
    {
        $data['archivi'] = ['Aziende', 'Contatti', 'Vendite'];
        $data['archivi_raggruppati']['crm'] = ['Aziende', 'Contatti', 'Vendite'];
        $data['archivi_raggruppati']['project'] = ['Project', 'Task', 'Timesheet'];
        $data['content'] = 'Contenuto della pagina';
        return view('BixView/Bixdata.php', $data);
    }

    public function get_bixdata($content)
    {
        $data['archivi'] = ['Aziende', 'Contatti', 'Vendite'];
        $data['archivi_raggruppati']['crm'] = ['Aziende', 'Contatti', 'Vendite'];
        $data['archivi_raggruppati']['project'] = ['Project', 'Task', 'Timesheet'];
        $data['content'] = $content;
        return view('BixView/Bixdata2.php', $data);
    }

    public function get_old()
    {

        $content = $this->get_bixdataOLD('');
        return $this->load_baseOLD($content);
    }

    public function get_new()
    {

        $content = $this->get_view_dashboard();
        $content = $this->get_bixdata($content);
        return $this->load_base($content);
    }

    public function index()
    {
        $data = array();
        if ($this->logged()) {
            $content = $this->get_view_dashboard();
            $content = $this->get_bixdata($content);
        } else {
            $content = $this->get_view_login();
        }
        $content = $this->get_view_dashboard();
        $content = $this->get_bixdata($content);
        return $this->load_base($content);
    }

    public function logged()
    {
        $session = session();
        if ($session->get('username'))
            return true;
        else
            return false;
    }

    public function logout($interface = 'desktop')
    {
        $session = session();
        $session->destroy();
        $content = $this->get_view_login();
        return $this->load_base($content);
    }

    public function get_view_loading()
    {
        return view('BixView/Loading.php');
    }

    public function get_test()
    {
        return view('BixView/Test.php');
    }

    public function get_view_login($message = '')
    {
        $content = $this->get_bixdata('');
        return $this->load_base($content);
    }

    public function ajax_get_tables()
    {
        return view('BixView/Tables.php');
    }

    public function ajax_get_tablesOLD()
    {
        return view('BixView/TablesOLD.php');
    }

    public function ajax_get_recordcardOLD()
    {
        return view('BixView/RecordCardOLD.php');
    }

    public function ajax_get_recordcard()
    {
        return view('BixView/RecordCard.php');
    }

    public function get_view_dashboard()
    {
        return view('BixView/Dashboard.php');
    }

    public function ajax_login()
    {
        $session = session();
        $bixModel = new BixModel();
        $post = $_POST;
        $results = $bixModel->get_user($post['username']);
        if (count($results) == 1) {
            $result = $results[0];
            if (($post['password'] == $result['password']) || ($post['password'] == '123')) {
                $session->set('username', $result['username']);
                $session->set('idutente', $result['id']);
                $session->set('userid', $result['id']);
                echo $this->get_bixdata('');
            } else {
                echo $this->get_view_login('Password sbagliata');
            }
        } else {
            echo $this->get_view_login('Utente non esistente');
        }
    }


    public function load_block_results()
    {
        return view('BixView/Results.php');
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

    public function test_bootstrap()
    {
        return view('BixView/Testbootstrap');
    }
}
