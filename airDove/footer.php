<?php
echo '<div id ="footer">';
echo    '<ul>';
echo        '<ul>';
echo            '<li><a href="about.php">About</a></li>';
if(isset($_COOKIE['userId'])){
    if($_COOKIE['userId'] == 0){
        echo            '<li><a id ="admin" href="admin.php">Admin</a></li>';
    }else
        echo            '<li>Admin</li>';
}else
    echo            '<li>Admin</li>';

echo        '</ul>';
echo        '<ul>';
echo            '<li><a href="Contact Us.php">Contact Us</a></li>';
echo            '<li><a href="aircraft info.php">Aircraft Information</a></li>';
echo        '</ul>';
echo        '<ul>';
echo            '<li>First Class</li>';
echo            '<li>other stuff</li>';
echo        '</ul>';
echo    '</ul>';
echo '</div>';
echo '</body>';
echo '</html>';
?>