<?php 
// Link to Config.php in model folder.
require_once(__DIR__ . "/../model/config.php");
// link to login-verify.php in controller folder.
require_once(__DIR__ . "/../controller/login-verify.php");
// Authenticating user in index.php
if(!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
}
?>
 <!--Header for Blog post creation--> 
<h1>Create Blog Post</h1>
<!-- Link to create-post.php in controller folder -->
    <form method="post" action="<?php echo $path . "controller/create-post.php";?>">

    
        <div> <!-- title section for post form -->
            <label for="title">Title: </label> 
            <input type="text" name="title" />
        </div>
    <div> <!-- Post section for post form -->
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    <div> <!-- Submit button to make sure post is sent to database -->
        <button type="submit">Submit</button>
    </div>
    
</form>