<?php
  $username = $_POST['username'];
  $password = $_POST['pass'];
  if (($username == 'joko' && $password == 'passjoko') || 
      ($username == 'amir' && $password == 'passamir')) {
    echo "Login sukses";
  } else {
    echo "Login gagal";
  }
?>