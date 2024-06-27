<?php

include_once("data.php");
class Database extends Connect
{
    public $con;
    function __construct()
    {
        date_default_timezone_set("asia/phnom_penh");
        $this->con = new mysqli("$this->host", "$this->username", "$this->pass", "$this->db");
        $this->con->set_charset("utf-8");
        if (!$this->con) {
            echo "Error Connection";
        }
    }
    function getProductByCode($con = false)
    {
        $sql = "SELECT * FROM cus_products WHERE $con LIMIT 0,1";
        $result = $this->con->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_array();
            return $row;
        } else {
            return false;
        }
    }
}
