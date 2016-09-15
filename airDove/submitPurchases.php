<!DOCTYPE html>
<?php
include("./header.php");
?>

<?php

$dbhandle = mysqli_connect('localhost', 'root', '', 'Airdove');

if ($dbhandle == false) {
    die  ("Unable to connect to MySQL Database<br>");
}
session_start();
$quantity = $_POST["quantity"];
if(isset($_COOKIE['userId'])) {
    $customerId = $_COOKIE["userId"];
}else {
    $customerId = 10;
    setcookie("userId",$customerId);

}
$flightId = $_SESSION["flightId"];


for($i = 0; $i <= $quantity; $i++){

    $row = rand(5, 15);
    $seat = chr(65 + rand(0, 7));
    $result = mysqli_query($dbhandle, "SELECT max(ticketId) FROM tickets");
    $maxid = mysqli_fetch_row($result);
    $ticketId = (int)$maxid[0]+1;

    $queryString = "INSERT into tickets VALUES({$ticketId}, {$customerId}, {$flightId}, {$row}, '{$seat}')";

    mysqli_query($dbhandle, $queryString);
}
header('Location: loggedIn.php');
?>




<?php
include("./footer.php");
?>
