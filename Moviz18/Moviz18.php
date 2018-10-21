<html>
<head>
    
</head>
<body>
 <?php
include "connection.php";
// include "search_all_movies.php";
    ?>
    
<form action="search_keyword.php">
  Enter keyword to search for:<br>
  <input type="text" name="keyword"><br>
  <input type="submit" value="Submit">
</form>    

<?php
// include "search_keyword.php";

    $mysqli->close();
?>

</body>
</html>