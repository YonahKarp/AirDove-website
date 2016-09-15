
<?php

$dbhandle = mysqli_connect('localhost', 'root', '', 'Airdove');
if ($dbhandle == false) {
    die  ("Unable to connect to MySQL Database<br>");
}

$result = mysqli_query($dbhandle, "SELECT * FROM customers");
$rowVals = array();
while($rows = mysqli_fetch_assoc($result)){
    $rowVals[$rows["username"]] = $rows["pass"];
}

session_start();

echo 'Data submitted:<br>';

$LoggedIn = false;
$name = $_POST["userBox"];
$password = $_POST["passBox"];

if(array_key_exists($name,$rowVals)){
    if($rowVals[$name] == $password){

        $result = mysqli_query($dbhandle, "SELECT * FROM customers WHERE username = '{$name}'");
        while($rows = mysqli_fetch_assoc($result)){
            setcookie("userId", $rows["customerId"]);
            $_SESSION['name'] = $rows["fname"];
        }

        echo "information valid";
        header('Location: loggedIn.php');
    }
    else{
        $_SESSION["message"] = "password invalid";
        header('Location: login.php');
        echo "password invalid <br>";
    }


}
else{
    $_SESSION["message"] = "user " . $name . " does not exist";
    header('Location: login.php');
    echo "user " . $name . " does not exist";

}


?>