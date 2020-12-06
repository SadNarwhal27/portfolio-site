<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Generator</title>
</head>
<body>
    <h1>Random Name Generator</h1>

    <?php
    $servername = "localhost";
    $username = "u363076772_Maurice20";
    $password = "t5K!Vyn?7Yz8";
    $dbname = "u363076772_DnD_Generator";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM names ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
        echo $row["name_text"];
      }
    }

    mysqli_close($conn);
    ?>
</body>
</html>