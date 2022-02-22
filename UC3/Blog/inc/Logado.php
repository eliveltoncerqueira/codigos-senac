<?php
session_start();

if($_SESSION['logado']==true){
  
}
else{
    header("Location: http://localhost/blog/login.php");
}
?>