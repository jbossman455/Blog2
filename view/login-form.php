<?php
// Link to config.php in model folder
require_once(__DIR__ ."/../model/config.php");
?>
<!-- Header for Login Page -->
<h1>Login</h1>
 <!-- Link to login-user.php in controller folder, also stating its a form post page.-->
<form method="post" action ="<?php echo $path ."controller/login-user.php"; ?>">
      <div>
          <!-- User name text input section-->
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
   <!--<div> Password text input session-->
        <label for="password">Password: </label>
        <input type="password" name="password" />
   </div>
   

    <!--<div> Submit Button to make sure information is submitted-->
        <button type="submit">Submit</button>
    </div>
</form>