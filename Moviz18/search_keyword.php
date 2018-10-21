<?php

include "connection.php";

$keywordfromform = $_GET["keyword"];

echo "<h2>Show all movies with the word avenger </h2>"; 

$sql = "SELECT MovieID, Movie_title, Movie_month, Movie_actor FROM Movies_table WHERE Movie_title LIKE '%" . $keywordfromform . "%'";
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