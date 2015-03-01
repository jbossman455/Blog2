<?php 
//Links to "login-verify.php" in the controller folder.
   require_once(__DIR__ . "/controller/login-verify.php");
// Link reffering to "header.php" in view folder.
   require_once(__DIR__ . "/view/header.php");
   // If user is authenticated, it will log him in to blog post form in index.php
   if(authenticateUser()){
   require_once(__DIR__ . "/view/navigation.php");
   }
   // Link reffering to "create-db.php" in controller folder
   require_once(__DIR__ . "/controller/create-db.php");
   // Link reffering to footer.php in view folder.
   require_once(__DIR__ . "/view/footer.php");
   // Link reffering to "read-posts.php" in controller folder.
   require_once(__DIR__ . "/controller/read-posts.php");
?>
 