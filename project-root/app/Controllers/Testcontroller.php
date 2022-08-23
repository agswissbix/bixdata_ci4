<?php

namespace App\Controllers;

class Testcontroller extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function test()
    {
        //$db = \Config\Database::connect();
        $db = db_connect();
        $SQL='select id,documentnr,title FROM user_salesorder limit 20
        ';
        $query   = $db->query($SQL);
        
        $results = $query->getResult();
        var_dump($results);
    }
}

?>