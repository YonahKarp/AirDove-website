<!DOCTYPE html>
<?php
include("./header.php");


$dbhandle = mysqli_connect('localhost', 'root', '', 'Airdove');
if ($dbhandle == false) {
    die  ("Unable to connect to MySQL Database<br>");
}


session_start();
if(isset($_SESSION['name']))
    echo '<h1> Welcome ' . $_SESSION['name'] . '. Thank you for your business!</h1>';

else
    echo 'session problem';


$id = $_COOKIE["userId"];
echo $id;

$queryString = "Select * from tickets WHERE customerId = $id";


$result = mysqli_query($dbhandle, $queryString);
//print count(mysqli_fetch_assoc($result));

?>

<div class="indent">
    <table border="2" class = "tablefull">
        <thead>
        <tr class="tableHead" >
            <th>ticketId</th>
            <th>flightId</th>
            <th>row</th>
            <th>Seat</th>
        </tr>
        </thead>
        <tbody>
<?php
while($rows = mysqli_fetch_assoc($result)){
?>
        <tr class = tableColumn>
            <td > <?php echo $rows['ticketId'] ?> </td>
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