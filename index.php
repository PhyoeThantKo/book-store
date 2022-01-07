<?php
     session_start();
     include("admin/confs/config.php");

     $cart = 0;
     if(isset($_SESSION['cart'])){
          foreach($_SESSION[$cart] as $qty ){
               $cart += $qty;
          }
     }
?>