<!DOCTYPE html>

<html lang='en'>
    <head>\n"
        <meta charset="UTF-8">
        <title>AirDove: The peaceful flying experience</title>
        <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
        <link rel="stylesheet" href="jquery-ui.min.css">
        <script src = "external/jquery/jquery.js"></script>
        <script src = "jquery-ui.min.js"></script>
        <script src = "myJs.js"></script>
        <script src ="validation.js"></script>

        <link rel='stylesheet' href='stylesheet.css'>
    </head>
    <body>
        <img id='overHeader' src='img/AirDove.png'>
        <div id= "header">
            <nav class="navbar navbar-default">
            <div id="navbar-header">
                <img class="navbar-brand" src="img/Logo.png">
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a class = "a" href="./Index.php">Home</a></li>
                    <li><a class = "a" href="./login.php">Login</a></li>

        <?php
        if(isset($_COOKIE['userId'])){
        echo                '<li><a class = "a" href="./loggedIn.php">Member</a></li>';
        }
        ?>
                    <li>
                        <?php include("./siteMap.php")?>
                    </li>
                </ul>

            </div>
            </nav>
        </div>






