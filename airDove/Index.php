<!DOCTYPE html>
<?php
include("./header.php");

?>

<?php

$dbhandle = mysqli_connect('localhost', 'root', '', 'Airdove');

if ($dbhandle == false) {
    die  ("Unable to connect to MySQL Database<br>");
}


?>


<div id = "body">

    <div id ="contentBox">
        <form action="flightSearch.php" method="post">
            <div class="panel panel-default">

                <img id="slide" src="img/New York.jpg">
                <div id="slides">
                    <img src="img/New York.jpg" alt="New York">
                    <img src="img/LA.jpeg" alt="Los Angeles">
                    <img src="img/Israel.jpg" alt="Israel">
                </div>

                <h3> Fly Today!</h3>
                <ul>
                    <li> Depart
                        <select name="fromLocation">
                            <option> >---Select---< </option>
                        <?php
                        $locationsQuery = "SELECT acronym FROM destinations ";
                        $result = mysqli_query($dbhandle, $locationsQuery);
                        while($rows = mysqli_fetch_assoc($result)){
                            echo "<option value = {$rows['acronym']}> ".$rows['acronym']."  </option>";
                        }
                        ?>
                        </select>
                        <label for="departDate1"> From </label>
                        <input name = "minDate" type = "text" placeholder= "depart date" id="departDate1">
                        <label for ="departDate2"> To </label>
                        <input name = "maxDate" type = "text" placeholder="depart date" id="departDate2">
                    </li>
                    <br>
                    <li> Arrive
                        <select name="toLocation">
                            <option> >---Select---< </option>';
                        <?php
                        $result = mysqli_query($dbhandle, $locationsQuery);
                        while($rows = mysqli_fetch_assoc($result)){
                            echo "<option value = {$rows['acronym']}> ".$rows['acronym']."  </option>";
                        }
                        ?>
                        </select>

                    </li>
                    <input type="submit" name="submitButton" value="Submit"/>
                </ul>
            </div>
        </form>
    </div>


    <p>_</p>

</div>

<?php
include("./footer.php");
?>

