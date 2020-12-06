<?php
include "db_connect";
$numNames = $_Get["num-names"];
echo $numNames;

$sql = "SELECT * FROM names ORDER BY RAND() LIMIT $numNames";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["name_text"] . "<br>";
  }
}

mysqli_close($conn);
?>