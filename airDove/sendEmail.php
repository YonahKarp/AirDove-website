<!DOCTYPE html>

<?php

include("./header.php");




$email = mail("{$_POST["email"]}", 'airDove support', "{$_POST["textArea"]}");

if($email){
    $message = "success!";
}else{
    $message = "failed";
}

echo '<div class="indent">';
echo'<h2> '.$message.' </h2>';
echo '</div>'
?>



<?php
include("./footer.php");
?>
