<?php

namespace App\Controllers;

class Bixcontroller extends BaseController
{
    public function index()
    {
        return view('BixView/Login.php');
    }

    public function Login()
    {
        return view('BixView/Login.php');
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

    public function ajax_login()
    {
        return view('BixView/Dashboard.php');
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
        return view ('BixView/Dashboard');
    }

    


    
}


?>