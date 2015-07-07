<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('db.php'); 
$query = "SELECT 1 FROM dual";
$conn = connect();
print_r($conn);
$result = pg_query($conn, $query);
 
if (!$result) { 
    die($conn->error);
}
 else {
    
    while ($row = pg_fetch_row($result)) {
      echo "result : ".$row[0] ;
      echo "<br />\n";
    }
 }
echo $result;
?>