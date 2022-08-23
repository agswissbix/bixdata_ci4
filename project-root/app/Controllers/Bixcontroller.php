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

    


    
}


?>