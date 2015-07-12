<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('db.php'); 
$conn = connect();

/*$query = "SELECT 1 FROM dual";

print_r($conn);
$result = pg_query($conn, $query);
*/
/*procedure call*/

$id= 4;
$name = ' new name';
$desc = 'some desc';
$result = pg_query($conn, "SELECT phil.insert_into_log($id, '{$name}',  '{$desc}');");
/*CREATE or replace FUNCTION
    phil.insert_into_log (i_log_id logs.log_id%type,
		     i_user_name logs.user_name%type,
		     i_description logs.description%type )
returns integer
   as $$ 
  BEGIN
    INSERT INTO public.logs(
            log_id, user_name, description, log_ts)
    VALUES (i_log_id, i_user_name, i_description, null);
 return 1;
 END;
$$ LANGUAGE plpgsql;
 * */
 
 
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