<?php

	$host     = 'localhost';
	$user     = 'root';
  $password = '';
  $db       = 'spk_alatmining';

	$konek = new mysqli($host,$user,$password,$db);
  if ($konek->connect_errno) {
    echo "gagal". $konek->connect_errno;}
  else {
    //echo "berhasil";
  }
 ?>
