<?php
// Link to config.php in model folder.
     require_once(__DIR__ . "/../model/config.php");
?>

<nav>
    
    <ul> 
        <!--Refering to post.php for for Blog Post Form-->
        <li><a href="<?php echo $path . "post.php"?>">Blog Post Form</a></li>
    </ul>
</nav>