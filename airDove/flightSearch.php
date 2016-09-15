<!DOCTYPE html>
<?php
include("./header.php");

if(true) {

    $dbhandle = mysqli_connect('localhost', 'root', '', 'Airdove');
    if ($dbhandle == false) {
        die  ("Unable to connect to MySQL Database<br>");
    }

    $fromLocation = $_POST["fromLocation"];
    $toLocation = $_POST["toLocation"];
    $minDate = $_POST["minDate"];
    $maxDate = $_POST["maxDate"];

    $flightsQuery2 = "Select * from flights where fromLocation = '{$fromLocation}' AND  toLocation =  '{$toLocation}' AND leavingDate > '{$minDate}' AND leavingDate < '{$maxDate}'";


    $result = mysqli_query($dbhandle, $flightsQuery2);
    //print count(mysqli_fetch_assoc($result));
}
?>


<div class="indent">
    <h3>Select a ticket:</h3>
    <table border="2" class = "tablefull">
        <thead>
            <tr class="tableHead" >
                <th>flightId</th>
                <th>fromLocation</th>
                <th>toLocation</th>
                <th>price</th>
                <th>leavingDate</th>
                <th>arrivingDate</th>
            </tr>
        </thead>
        <tbody>
<?php
while($rows = mysqli_fetch_assoc($result)){
?>
            <tr class = tableColumn>
                <td > <a class="flightId"><?php echo $rows['flightId'] ?></a> </td>
                <td><?php echo $rows['fromLocation'] ?></td>
                <td><?php echo $rows['toLocation'] ?></td>
                <td>$<?php echo $rows['price'] ?></td>
                <td><?php echo $rows['leavingDate'] ?></td>
                <td><?php echo $rows['arrivingDate'] ?></td>
            </tr>


<?php
}
?>
        </tbody>
    </table>

    <form action="purchase.php" method="post">
        <br/>
        <!-- hidden input allows transfer of js variable to php-->
        <input id="selectedId" readonly hidden style="width:5em" type="text" name="flightId" value="select a flight" />
        <br/>
        <input type="submit" name="submitButton" value="Purchase"/>
    </form>
</div>

<?php
include("./footer.php");
?>



