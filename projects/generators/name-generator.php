<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="\css\generator\name-generator\generator-style.css">
        <title>Name Generator</title>
    </head>
    <body>

        <header>

            <a href="index.html" class="logo">Travis Schall</a>

            <nav>
                <ul>
                    <li><a href="https://travisschall.com/index.html#my-work">My Work</a></li>
                    <li><a href="https://travisschall.com/index.html#my-skills">My Skills</a></li>
                    <li><a href="#">Hire Me</a></li>
                </ul>
            </nav>

        </header>

        <div class="generator-container">
            <h1>Random Name Generator</h1>

            <form class="generator" action="name-generator.php" autocomplete="off">

                <div class="name-numbers">    
                    <label for="num-names">Number of Names</label>
                    <span><input type="number" step="1" min="1" max="25" name="num-names" value="<?php echo isset($_GET['num-names']) ? htmlspecialchars($_GET['num-names'], ENT_QUOTES) : ''; ?>"></span>
                </div>

                <div class="gender-select">
                    <label for="g">Pick By Gender</label>
                    <span><select name="g">
                        <option value="0" <?php if($_GET['g'] == 0) {echo 'selected=selected';} ?>>Any</option>
                        <option value="1" <?php if($_GET['g'] == 1) {echo 'selected=selected';} ?>>Masculine</option>
                        <option value="2" <?php if($_GET['g'] == 2) {echo 'selected=selected';} ?>>Femanine</option>
                    </select></span>
                </div>

                <input type="submit" value="Submit">
            </form>
        </div>

        <div class="names-container">
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
                } 

                $first_names = array();
                $fname = "SELECT `name` FROM names WHERE name_gender LIKE '$g' ORDER BY RAND() LIMIT $numNames";
                $fresult = $conn->query($fname);

                if ($fresult->num_rows > 0) {
                    // output data of each row to an array of first names
                    while($row = $fresult->fetch_assoc()) {
                        array_push($first_names, $row['name']);
                    }
                }

                $last_names = array();
                $lname = "SELECT `last_name` FROM names ORDER BY RAND() LIMIT $numNames";
                $lresult = $conn->query($lname);

                if ($lresult->num_rows > 0) {
                    // output data of each row to an array of last names
                    while($row = $lresult->fetch_assoc()) {
                        array_push($last_names, $row['last_name']);
                    }
                }

                // Displays each entry of the first and last name arrays
                for ($i = 0; $i < count($first_names); $i++) {
                    echo '<div class="name">' . $first_names[$i] . ' ' . $last_names[$i] . '</div>';
                }

                mysqli_close($conn);
            ?>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js" integrity="sha512-wK2NuxEyN/6s53M8G7c6cRUXvkeV8Uh5duYS06pAdLq4ukc72errSIyyGQGYtzWEzvVGzGSWg8l79e0VkTJYPw==" crossorigin="anonymous"></script>

        <!--Script for animating the page contents-->
        <script>
            gsap.registerPlugin(ScrollTrigger);
            var tl = gsap.timeline();

            tl.from('.names-container', {
                x: '20%',
                opacity: 0,
                duration: 1,
                ease: Power4.easeOut
            })
        </script>
        
    </body>
</html>
