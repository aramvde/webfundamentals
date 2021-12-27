<?php
	session_start();
    include "database/index.php";
    $database = new Database();
    
    // FIND ID
    if (empty($_SESSION["refresh"])) {
        $_SESSION["refresh"] = 0;
    }
    $number = $_SESSION["refresh"] + 1;
    $_SESSION["refresh"] = $number;
    
    $query = "SELECT * FROM sorting;";
    $result = $database->getQuery($query);
    $amountOfRows = $database->rows($result);
    
    if ($number > $amountOfRows) {
        $_SESSION["refresh"] = 0;
        header("Location:ending.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sorting hat</title>
        <link rel="stylesheet" href="assets/css/sort-people.css" type="text/css">
    </head>
    <body>
        <?php
            // BACKGROUND
            include "components/background.php";
        ?>

        <!-- PROFILE -->
        <div class="container">
            
            <?php
                $sql = "SELECT * FROM sorting WHERE `id` = '$number';";
                $result = $database->getQuery($sql);
                $row = $database->fetchArray($result);
                
                $firstname;
                $lastname;
                $gender;
                $age;
                $details;

                if ($row) {
                    $firstname = $row["firstname"];
                    $lastname = $row["lastname"];
                    $gender = $row["gender"];
                    $age = $row["age"];
                    $details = $row["details"];
            ?>
                    
                    <!-- NAME -->
                    <div class="name">
                        <p><?php echo $firstname . " " . $lastname; ?></p>
                    </div>
                    
                    <!-- PICTURE -->
                    <div class="image">
                    <?php
                        if ($gender == "Male") {
                    ?>
                            <img src="assets/images/ron-weasley.jpeg" alt="Ron Weasley with the sorting hat on">
                    <?php
                        }
                        elseif ($gender == "Female") {
                    ?>
                            <img src="assets/images/hermione-granger.jpeg" alt="Hermione Granger with the sorting hat on">
                    <?php
                        }
                        else {
                    ?>
                            <img src="assets/images/sorting-hat.jpeg" alt="TThe sorting hat">
                    <?php
                        }
                    ?>
                    </div>
                    
                    <!-- GENDER -->
                    <div class="gender age">
                        <p><?php echo $gender;?> | <?php echo $age . " years old"; ?></p>
                    </div>
                    
                    <!-- DESCRIPTION -->
                    <div class="description">
                        <p><?php echo $details;?></p>
                    </div>
                    
                    <!-- BUTTONS -->
                    <div class="buttons">
                        
                        <form method="POST" id="form">
                            <div class="category">
                                <div class="one">
                                    <input type="radio" name="house" value="gryffindor" id="gryffindor" class="radio" required>
                                    <label for="gryffindor" class="gryffindor-label">
                                        GRYFFINDOR
                                    </label>
                    
                                    <input type="radio" name="house" value="hufflepuff" id="hufflepuff" class="radio">
                                    <label form="hufflepuff" class="hufflepuff-label">
                                        HUFFLEPUFF
                                    </label>
                                </div>
                    
                                <div class="one">
                                    <input type="radio" name="house" value="ravenclaw" id="ravenclaw" class="radio">
                                    <label form="ravenclaw" class="ravenclaw-label">
                                        RAVENCLAW
                                    </label>
                                    
                                    <input type="radio" name="house" value="slytherin" id="slytherin"class="radio" >
                                    <label form="slytherin" class="slytherin-label">
                                        SLYTHERIN
                                    </label>
                                </div>
                            </div>
                            <!-- NEXT PERSON -->
                            <div>
                                <input class="submit" name="submit" type="submit" value="SORT"/>
                            </div>
                        </from>
                    </div>

            <?php
                }
                if (isset($_POST["submit"])) {
                    $house = $_POST["house"];
                    $sqlUpdate = "UPDATE sorting SET $house = $house + 1 WHERE id = $number-1;";
                    $database->updateQuery($sqlUpdate);
                }
            ?>
            </div>
    </body>
</html>