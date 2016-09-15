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




$flightId = $_POST["flightId"];
$_SESSION["flightId"] = $flightId;

$flightsQuery2 = "SELECT * from flights where flightId = {$flightId}";


$result = mysqli_query($dbhandle, $flightsQuery2);

?>
<div class="indent">
    <h3>Purchase a ticket!</h3>

    <div class="floatLeft">

        <table border="2" class = "tablefull">
            <thead>
            <tr class="tableHead" >
                <th>flightId</th>
                <th>fromLocation</th>
                <th>toLocation</th>
                <th>price</th>
                <th>leavingDate</th>
                <th>leavingTime</th>
                <th>arrivingDate</th>
                <th>arrivingTime</th>
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
                    <td>$<span id ="basePrice"><?php echo $rows['price'] ?></span></td>
                    <td><?php echo $rows['leavingDate'] ?></td>
                    <td><?php echo $rows['leavingTime'] ?></td>
                    <td><?php echo $rows['arrivingDate'] ?></td>
                    <td><?php echo $rows['arrivingTime'] ?></td>
                </tr>


    <?php
}
?>
            </tbody>
        </table>

    </div>
    <div class = "indent">
       <br/><br/>
        <form action="submitPurchases.php" method="post">
            <label for="quantity">Quantity: </label>
            <input id="quantity" type="text" name="quantity" placeholder="How many tickets?" />
            <p> cost = $<span id="price">0</span></p>



            <br/>
            <label for="CC">Credit Card: </label>
            <input id="CC" type="text" name="Credit" placeholder=" Card number" />
            <span class="hidden" style='color: red'>must be valid card</span>

            <br/><br/>
            <input id="confirmPurchase" disabled type="submit"  name="submitButton" value="Confirm"/>
        </form>
    </div>


</div>



<?php
include("./footer.php");
?>

