<?php

namespace App\Models;

use CodeIgniter\Model;

class Bixmodel extends Model
{

    function select($sql)
    {
        $db = db_connect();
        $query = $db->query($sql);
        $rows = $query->getResultArray();
        return $rows;
    }

    function get_user($username)
    {
        $sql = "select * from sys_user WHERE username='$username'";
        return $this->select($sql);
    }
    function get_password($password)
    {
        $sql = "select * from sys_user WHERE password='$password'";
        return $this->select($sql);
    }
}
