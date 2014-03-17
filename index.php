<?php 
  function ConnectToDBi($db){
		/*********************************
		$db    - the database you want to query
		*********************************/
		$link = mysqli_connect('host','user','password',$db);
		return $link;
	}
	function ConnectToDBo($db){
    $mysqli = new mysqli('host','user','password',$db);
    return $mysqli;
  }