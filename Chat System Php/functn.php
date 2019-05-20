<?php
include './dbconnect.php';

function user_insert($name, $msg) {
    date_default_timezone_set('Asia/Dhaka');
    $dt = date('h:i:sa').'('.date('d-m-y').')';
    $c_key = $name .'(' .$msg.')';
    $query = mysql_query("INSERT INTO chat_table(name,msg,date,c_key) VALUES('" . $name . "','" . $msg . "','" . $dt . "','" . $c_key . "')");
    if ($query) {
        return true;
    } else {
        return false;
    }
}

function get_all_chat()
{
    $var = array();
    $query = mysql_query("SELECT * FROM chat_table ORDER BY c_id DESC" );
    
    if($query){
        while($row = mysql_fetch_array($query)){
            $var[] = $row;
         }
    }
    
    return $var;
}


?>
