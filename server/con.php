<?php
session_start();

    $link = mysqli_connect('localhost','root','sesnaco','simba'); 
    if (!$link) { 
	die('Could not connect to MySQL: ' . mysqli_error($link)); 
}



