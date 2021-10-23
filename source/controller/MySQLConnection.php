<?php

namespace Kanban\Controller;

use PDO;

class MySQLConnection
{
    public static function createConnection(): PDO
    {
        $connection = new PDO("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DBNAME, MYSQL_USERNAME, MYSQL_PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $connection;
    }
}
