<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Generator</title>
</head>
<body>
    <h1>Random Name Generator</h1>

    <form action="name-generator.php">
        <label for="num-names">Number of Names</label><br>
        <input type="number" step="1" min="1" name="num-names" value=5><br><br>

        <label for="g">Pick By Gender</label><br>
        <select name="g">
            <option value="0">Any</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
        </select><br><br>

        <input type="submit" value="Submit"><br>
    </form>

    <?php
    // Remote mySQL servername: sql451.main-hosting.eu
    // Always change back to localhost when publishing
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

    // Get number of names to show
    if (isset($_GET['num-names'])) {
        $numNames = (int)$_GET['num-names'];
    } else {
        $numNames = 5;
    }

    // Get gender of names
    if (isset($_GET['g'])) {
        $gen = (int)$_GET['g'];
        if ($gen == 0) {
            $g = '%';
        } else if ($gen == 1) {
            $g = 'm';
        } else {
            $g = 'f';
        }
    } else {
        $g = '%';
    }    

    $fname = "SELECT `name` FROM names WHERE name_gender LIKE '$g' ORDER BY RAND() LIMIT $numNames";
    $fresult = $conn->query($fname);

    // $lname = "SELECT `last_name` FROM names ORDER BY RAND() LIMIT $numNames";
    // $lresult = $conn->query($lname);

    if ($fresult->num_rows > 0) {
        // output data of each row
        while($frow = $fresult->fetch_assoc()) {
            echo $frow["name"] . " ";
            echo $lrow["last_name"] . "<br>";
        }
    } else {
        echo "nope";
    }

    mysqli_close($conn);
    ?>
    
</body>
</html>
