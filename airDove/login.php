<!DOCTYPE html>
<?php
include("./header.php");
?>


<body>
    <!--img id="background" src="img/AirDove.png"-->
    <form action="formOutput.php" method="post">
        <div id="login" class="panel panel-default">
            <p id="top"> Username: <input type="text" name="userBox" value="" /></p>
            <br>
            <p>Password: <input type="text" name="passBox" value="" /></p>
            <?php
            session_start();
                if(isset($_SESSION["message"])) {
                echo $_SESSION["message"];
            }
            ?>

            <input type="submit" name="submitButton" value="Submit"/>
            <br>
            <p>Don't have an account? <a href="Register.php">  Register here!</a></p>


        </div>
    </form>
</body>


<?php
include("./footer.php");
?>
