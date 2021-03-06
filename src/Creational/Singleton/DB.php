<?php

namespace DP\Creational\Singleton;

class DB
{
    private static $instance;

    private $db_name;

    private $db_user;

    private $db_pwd;

    public function __construct() {
        $this->db_name = 'test_db';
        $this->db_user = 'username';
        $this->db_pwd = 'dbpwd';

        // OPEN AND CREATE CONNECTION TO DB
        echo 'Created connection...' . '<br>';
    }

    // If there IS instance of this class already, use it!
    // But, if there IS NO instance of this class, create new!
    public static function instance() {
        self::$instance = isset(self::$instance) ? self::$instance : new DB;

        return self::$instance;
    }

    public function query($statement) {
        echo $statement;
    }
}
