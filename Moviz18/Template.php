<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="styles/stylesheet.css" />
</head>
<body>
    <div id="wrapper">
        <div id="banner">
            <img class="banner-image" src="images/banner.jpg">
        </div>
        <nav id="navigation">
            <ul id="nav">
               
                <li><a href="Moviz18.php">Movies</a></li>
                <li><a href="#">TV Shows</a></li>
                <li><a href="#">Top Actors</a></li>
                <li><a href="#">My Watchlist</a></li>
            </ul>
            
        </nav>
        <div id="content-area">
             <?php echo $content; ?>
        </div>
        <div id="sidebar">
            
        </div>
        <footer>
            <p>All rights reserved</p>
        </footer>
    </div>
<?php
$mysqli = new mysqli("localhost", "user", "password", "database");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "user", "password", "database", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>
</body>
</html>

