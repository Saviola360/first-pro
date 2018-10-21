<?php

$mysqli = new mysqli($host, $username, $password, $database_in_use);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>"; 

$sql = "SELECT MovieID, Movie_title, Movie_month, Movie_actor FROM Movies_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Number: " . $row["MovieID"]. " - Movie: " . $row["Movie_title"]. " " . $row["Movie_month"]. " " . $row["Movie_actor"]. "<br>";
} 
} else {
    echo "0 results";

}


?>