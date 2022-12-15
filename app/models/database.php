<?php

Class database
{
    static $servername = "localhost";
    static $database = "college";
    static $username = "root";
    static $password = "";

    public function queryDB()
    {
        $conn = mysqli_connect(self::$servername, self::$username, self::$password, self::$database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Connected successfully";
        return $conn;
    }
}
