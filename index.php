<?php
     session_start();
     include("admin/confs/config.php");

     $cart = 0;
     if(isset($_SESSION['cart'])){
          foreach($_SESSION[$cart] as $qty ){
               $cart += $qty;
          }
     }

     if(isset($_GET['cat'])){
          $cat_id = $_GET['cat'];
          $books = mysqli_query($conn, "SELECT * FROM books WHERE category_id = $cat_id");
     } else {
          $books = mysqli_query($conn, "SELECT * FROM books");
     }

     $cats = mysqli_query($conn, "SELECT * FROM categories");
?>