<?php
require_once("DB_base.php");

class Admin extends DB_base {
    function add_new($sql) {
        parent::insert($sql);
    }
}

class Movie extends DB_base {
    function add_new($sql) {
        parent::insert($sql);
    }

    function getCurrentMovie($sql) {
        $result = parent::get_list($sql);
        return $result;
    }

    function getAllMovie($sql) {
        $result = parent::get_list($sql);
        return $result;
    }
    
    function getUpCommingMovie($sql) {
        $result = parent::get_list($sql);
        return $result;
    }

    function deleteMovie($sql) {
        $result = parent::remove($sql);
        return $result;
    }
}