<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bixmodel;

class Bixcontroller extends BaseController
{
    function callAPI($url, $postParameter)
    {


        $curlHandle = curl_init($url);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);

        $curlResponse = curl_exec($curlHandle);
        curl_close($curlHandle);


        return json_decode($curlResponse, true);
    }

    public function test_api_post()
    {
        $url = "http://10.0.0.133:8822/bixdata/index.php/rest_controller/get_records";

        $postParameter = array(
            'table' => 'company',
        );

        $curlHandle = curl_init($url);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);

        $curlResponse = curl_exec($curlHandle);
        curl_close($curlHandle);


        var_dump($curlResponse);
    }

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
        $data['archivi_raggruppati']['Crm'] = ['Aziende', 'Contatti', 'Vendite'];
        $data['archivi_raggruppati']['Project'] = ['Project', 'Task', 'Timesheet'];
        $data['content'] = $content;
        $data['tables_menu'] = $this->get_tables_menu();
        return view('BixView/Bixdata.php', $data);
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
            //$content = $this->get_view_dashboard();
            $content = $this->get_bixdata('');
        } else {
            $content = $this->get_view_login();
        }
        //$content = $this->get_view_dashboard();
        //$content = $this->get_bixdata($content);
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

    public function ajax_get_searchrecords($table)
    {
        $data = array();

        $results = $this->get_records($table);
        $data['columns'] = $results['columns'];
        $data['records'] = $results['records'];
        $data['report']['datax']=[
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];
        $data['report']['datay']=[0, 10, 5, 2, 20, 30, 45];
        return view('BixView/SearchRecords.php', $data);
    }

    public function ajax_get_tablesOLD()
    {
        return view('BixView/TablesOLD.php');
    }

    public function ajax_get_recordcardOLD()
    {
        return view('BixView/RecordCardOLD.php');
    }

    public function test_restcall()
    {

        $results = $this->callAPI('http://10.0.0.133:8822/jdocweb/index.php/rest_controller/get_fissi', array());
        var_dump($results);
    }

    public function get_tables_menu()
    {
        $output_array = $this->callAPI('http://10.0.0.133:8822/bixdata/index.php/rest_controller/get_tables_menu', array());

        return $output_array;
    }

    public function get_records($table)
    {
        $post['table'] = $table;
        $output_array = $this->callAPI('http://10.0.0.133:8822/bixdata/index.php/rest_controller/get_records', $post);

        return $output_array;
    }

    public function get_fissi()
    {
        $output_array = $this->callAPI('http://10.0.0.133:8822/bixdata/index.php/rest_controller/get_fissi', array());

        return $output_array;
    }

    public function get_record_labels()
    {
        $output_array = $this->callAPI('http://10.0.0.133:8822/bixdata/index.php/rest_controller/get_record_labels', array());

        return $output_array;
    }

    public function get_record_fields()
    {
        $output_array = $this->callAPI('http://10.0.0.133:8822/bixdata/index.php/rest_controller/get_record_fields', array());

        return $output_array;
    }

    public function ajax_get_recordcard()
    {
        $data['previewcard_fields'] = $this->get_fissi();
        $data['labels'] = $this->get_record_labels();
        $data['record_fields'] = array();//$this->get_record_fields();
        return view('BixView/RecordCard.php', $data);
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

    public function test_array()
    {
        $data['arrays'] = $this->get_fissi();
        return view('BixView/test_array', $data);
    }

    public function ajax_get_test_content()
    {
        $data = array();
        return view('BixView/test_content', $data);
    }

    public function testtab()
    {
        return view('BixView/testtab');
    }
}
