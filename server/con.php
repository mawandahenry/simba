<?php
session_start();
function connect(){
    $link = mysqli_connect('localhost','root','sesnaco','simba'); 
    if (!$link) { 
	die('Could not connect to MySQL: ' . mysqli_error($link)); 
}
return $link;
}

