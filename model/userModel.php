<?php

namespace model;

use PDO;

class userModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname='.DB_NAME.';charset=utf8', DB_USER_NAME, DB_PASSWORD);
        $this->_deploy();
    }

    private function _deploy() {
        $query = $this->db->query('SHOW TABLES');
        $tables = $query->fetchAll();

        if (count($tables) == 0) {
            $sql = <<<END
CREATE TABLE `users` (
  `username` VARCHAR(30) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `rol` VARCHAR(64) NOT NULL DEFAULT 'user'
);
END;
            $this->db->query($sql);
        }
    }


    function getUserByName($username){
        $select= $this->db->prepare('SELECT * FROM users WHERE username=?');
        $select->execute([$username]);
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }

}
