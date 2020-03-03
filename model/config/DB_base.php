<?php
require '.././vendor/autoload.php';
use Analog\Analog;
use Analog\Handler\File;
Analog::handler(File::init('.././log/php.log'));
class DB_base {
    public $__conn,
        $localhost = "localhost",
        $user = "root",
        $pass = "",
        $DbName = "booking";

    function __construct() {
        if (!$this->__conn) {
            $this->__conn = mysqli_connect($this->localhost, $this->user, $this->pass, $this->DbName) or die('Connect Error');
            mysqli_query($this->__conn, "SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
            mysqli_query($this->__conn, "set names 'utf8'");
            mysqli_set_charset($this->__conn, "utf8");
        }
    }

    function dis_connect() {
        if ($this->__conn) {
            mysqli_close($this->__conn);
        }
    }

    function insert($sql) {
        Analog::log($sql);
        return mysqli_query($this->__conn, $sql);
    }

    function update($sql) {
        Analog::log($sql);
        return mysqli_query($this->__conn, $sql);
    }

    function remove($sql) {
        Analog::log($sql);
        return mysqli_query($this->__conn, $sql);
    }

    //get All record
    function get_list($sql) {
        Analog::log($sql);
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die('sql query wrong ! ' . $sql);
        }

        $return = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $return[] = $row;
        }
        mysqli_free_result($result);
        return $return;
    }

    //get 1 record 
    function get_row($sql) {
        Analog::log($sql);
        $result = mysqli_query($this->__conn, $sql);
        if (!$result) {
            die('sql query wrong ! ' . $sql);
        }
        $row = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        if ($row) {
            return $row;
        }
        return false;
    }
}
