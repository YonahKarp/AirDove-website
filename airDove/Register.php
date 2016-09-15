<!DOCTYPE html>
<?php
include("./header.php");

?>


<div>
    <div class="indent">
        <form id= "validate" action="Registered.php" method="post">

            <label for="fName"> first Name </label>
            <input name = "fName" type = "text" placeholder= "first Name" id="fName">
            <span class="hidden" style='color: red'>*</span>
            <br/>
            <label for="lName"> last name </label>
            <input name = "lName" type = "text" placeholder= "last Name" id="lName">
            <span class="hidden" style='color: red'>*</span>

            <br/><br/>
            <label for="uName"> username </label>
            <input name = "uName" type = "text" placeholder= "username" id="uName">
            <span class="hidden" style='color: red'>*</span>
            <br/>
            <label for="pass"> password</label>
            <input name = "pass" type = "text" placeholder= "password" id="pass">
            <span class="hidden" style='color: red'>*</span>
            <br/><br/>

            <label for="email  "> email &nbsp;&nbsp; </label>
            <input name = "email" type = "text" placeholder= "email" id="email">
            <span class="hidden" style='color: red'>We need a valid Email</span>
            <br/>
            <label for="confirm"> confirm </label>
            <input name = "confirm" type = "text" placeholder= "confirm email" id="confirm">
            <span class="hidden" style='color: red'>email must match</span>
            <br/><br/>
            <input type="submit" name="submitButton" value="Submit"/>

        </form>
    </div>
</div>


<?php
include("./footer.php");
?>

