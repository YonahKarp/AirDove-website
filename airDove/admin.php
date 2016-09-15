<!DOCTYPE html>
<?php
include("./header.php");


$dbhandle = mysqli_connect('localhost', 'root', '', 'Airdove');
if ($dbhandle == false) {
    die  ("Unable to connect to MySQL Database<br>");
}
?>

<div class="indent">
    <table border="2" class = "tablefull">
        <thead>
        <tr class="tableHead" >
            <th>customerId</th>
            <th>first name</th>
            <th>last name</th>
            <th>username</th>
            <th>password</th>
            <th>email</th>
        </tr>
        </thead>
        <tbody>
<?php
$result = mysqli_query($dbhandle, "Select * from customers");
while($rows = mysqli_fetch_assoc($result)){
?>
        <tr class = tableColumn>
            <td ><?php echo $rows['customerId'] ?> </td>
            <td><?php echo $rows['fname'] ?></td>
            <td><?php echo $rows['lname'] ?></td>
            <td><?php echo $rows['username'] ?></td>
            <td><?php echo $rows['pass'] ?></td>
            <td><?php echo $rows['email'] ?></td>
        </tr>


<?php
}
?>
        </tbody>
    </table>
    <br/>

    <table border="2" class = "tablefull">
        <thead>
        <tr class="tableHead" >
            <th>acronym</th>
            <th>name</th>
            <th>country/state</th>
            <th>city</th>
        </tr>
        </thead>
        <tbody>
<?php
$result = mysqli_query($dbhandle, "Select * from destinations");
while($rows = mysqli_fetch_assoc($result)){
?>
            <tr class = tableColumn>
                <td ><?php echo $rows['acronym'] ?> </td>
                <td><?php echo $rows['name'] ?></td>
                <td><?php echo $rows['country_state'] ?></td>
                <td><?php echo $rows['city'] ?></td>
            </tr>


<?php
}
?>
        </tbody>
    </table>
    <br/>

    <table border="2" class = "tablefull">
        <thead>
        <tr class="tableHead" >
            <th>flightId</th>
            <th>aircraft Model</th>
            <th>Departing from</th>
            <th>Destination</th>
            <th>price</th>
            <th>leaving Date</th>
            <th>leaving Time</th>
            <th>arriving Date</th>
            <th>arriving Time</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $result = mysqli_query($dbhandle, "Select * from flights");
        while($rows = mysqli_fetch_assoc($result)){
            ?>
            <tr class = tableColumn>
                <td ><?php echo $rows['flightId'] ?> </td>
                <td><?php echo $rows['airCraftModel'] ?></td>
                <td><?php echo $rows['fromLocation'] ?></td>
                <td><?php echo $rows['toLocation'] ?></td>
                <td><?php echo $rows['price'] ?></td>
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
    <br/>

    <table border="2" class = "tablefull">
        <thead>
        <tr class="tableHead" >
            <th>ticketId</th>
            <th>customerId</th>
            <th>flightId</th>
            <th>row</th>
            <th>Seat</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $result = mysqli_query($dbhandle, "Select * from tickets");
        while($rows = mysqli_fetch_assoc($result)){
            ?>
            <tr class = tableColumn>
                <td ><?php echo $rows['ticketId'] ?> </td>
                <td><?php echo $rows['customerId'] ?></td>
                <td><?php echo $rows['flightId'] ?></td>
                <td><?php echo $rows['rowNumber'] ?></td>
                <td><?php echo $rows['seatLetter'] ?></td>
            </tr>


<?php
}
?>
        </tbody>
    </table>



</div>


<?php
include("./footer.php");
?>