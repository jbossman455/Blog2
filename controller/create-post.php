<?php
// Link to config.php
require_once(__DIR__ . "/../model/config.php");
//Allows title and posts to be filtered.
$title = filter_input(INPUT_POST,"title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST,"post", FILTER_SANITIZE_STRING);
// String will echo "title".
echo "<p>Title: $title</p>";
// String wille echo "post".
echo "<p>Post: $post</p>";
// Connection to title and post user creates.
$query = $_SESSION["connection"]->query("INSERT INTO posts SET title =  '$title', post ='$post'");
// IF post succesfully is created will echoo....
if($query) {
    echo "<p>Succesfully inserted post: $title</p>";
}
else {//if post is not succesfully inserted, it will not echo anything.
    echo "<p>".$_SESSION["connection"]->error."</p>";
}

