<?php
//Link to config.php in model folder.
require_once (__DIR__ . "/../model/config.php");
// Selects alll posts
$query = "SELECT * FROM posts";
// Verifying connection to Session
$result = $_SESSION["connection"]->query($query);
// Posts format class.
if($result) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='post'>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<br />";
        echo "<p>" . $row['post'] . "</h1>";
        echo "<br/>";
        echo "<div>";
        
    }
}
