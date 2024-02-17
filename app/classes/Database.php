<?php


namespace App\classes;

use mysqli;

/**
 * Summary of Database
 */
class Database
{

    public static function db()
    {
        $host = '127.0.0.1';
        $username = 'root';
        $password = '';
        $database = 'hackspace';
        $link = new mysqli($host, $username, $password, $database);

        // Check for connection errors
        if ($link->connect_error) {
            die("Connection failed: " . $link->connect_error);
        }
        return $link;
    }

}

