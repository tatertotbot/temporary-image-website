<?php
$info = pathinfo($_FILES['userFile']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "1.png";
$target = 'images/'.$newname;

rename ("C:/xampp/htdocs/images/3.png", "C:/xampp/htdocs/images/4.png");
rename ("C:/xampp/htdocs/images/2.png", "C:/xampp/htdocs/images/3.png");
rename ("C:/xampp/htdocs/images/1.png", "C:/xampp/htdocs/images/2.png");
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);
?>
<html>
<b>Successfully uploded go back to the website to see it!
<form action="Posts.html">
    <input type="submit" value="Go back to main page" />
</form>
</html>