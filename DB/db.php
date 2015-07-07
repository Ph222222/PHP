<?php

define("host", "localhost");
define("port", "5432");
define("dbname", "postgres");
define("user", "postgres");
define("password", "317");




function connect() {
    $connection_string = "host=".host." port=".port." dbname=".dbname. " user=".user." password=".password;
    echo $connection_string;
    $dbconn3 = pg_connect($connection_string);
    return $dbconn3;
}

//connect to a database named "mary" on the host "sheep" with a username and password
/* 
 * To change  hthis license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

