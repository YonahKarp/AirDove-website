<!DOCTYPE html>
<?php
include("./header.php");


$dbhandle = mysqli_connect('localhost', 'root', '', 'Airdove');
if ($dbhandle == false) {
    die  ("Unable to connect to MySQL Database<br>");
}
$fname = $_POST["fName"];
$lname = $_POST["lName"];
$uname = $_POST["uName"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$max = mysqli_query($dbhandle, "SELECT MAX(customerId) from customers");
$maxi = mysqli_fetch_row($max);
$id = (int)$maxi[0]+1;

$queryString = "INSERT into customers VALUES($id,'".$fname."','".$lname."','".$uname."','".$pass."','".$fname."')";

mysqli_query($dbhandle, $queryString);

setcookie("userId",$id);
?>
<div>
    <div class="indent">
        <div class="indented">
            <?php
                echo '<h2> Hello'. $fname .', Thanks for Registering!</h2>'
            ?>
            <p> Here's a nice picture of a fighter jet, Just for you! </p>
            <img src="http://www.boeing.com/resources/boeingdotcom/defense/f-15_strike_eagle/images/f15_strike_eagle_hotspot_bg_960x410_mobile.png"/>
        </div>
    </div>
</div>
<?php
include("./footer.php");
?>
