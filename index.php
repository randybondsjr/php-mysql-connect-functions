<?php 
  function ConnectToDBi($db){
    /*********************************
		ConnectToDBi();
		Description: mysql connection to specified host
		$db					- the database you want to connect to
		Returns a mysqli link resource
    *********************************/
    $link = mysqli_connect('host','user','password',$db);
    return $link;
  }
  function ConnectToDBo($db){
    /*********************************
		ConnectToDBi();
		Description: mysql connection to specified host
		$db					- the database you want to connect to
		Returns a mysqli object
    *********************************/
    $mysqli = new mysqli('host','user','password',$db);
    return $mysqli;
  }