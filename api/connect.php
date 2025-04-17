<?php

define('DB_SERVER', 'localhost'); // Why it is 127.0.0.1?
define('DB_USERNAME', 'root'); //include username
define('DB_PASSWORD', ''); //include password
define('DB_NAME', 'voting1'); //include database name

/* Attempt to connect to MySQL/MariaDB database */
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME,3307);

// Check connection
if ($connect === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo "Connected";
}

?>
