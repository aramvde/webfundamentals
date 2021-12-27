<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>successsfully added</title>
        <link rel="stylesheet" href="assets/css/person-added.css" type="text/css">
    </head>
    <body>
        <?php 
            // BACKGROUND
            include "components/background.php"; 
            
            // DATABASE
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $age = $_POST["age"];
            $details = $_POST["details"];
            $gender = $_POST["gender"];

            include "database/index.php";
            $database = new Database();

            $sqlInsertQuery = "INSERT INTO `sorting` (`firstname`, `lastname`, `age`, `details`, `gender`, `gryffindor`, `hufflepuff`, `ravenclaw`, `slytherin`) VALUES ('$firstname', '$lastname', '$age', '$details', '$gender', '0', '0', '0', '0');";
            
            $database->insertQuery($sqlInsertQuery);
            
        ?>


        <!-- SUCCES TEXT -->
        <div class="succes">
            <h1>
                Congratulations! <br> The information is successsfully added.
            </h1>

            <!-- BUTTONS -->
            <div class="buttons">
                <?php include "components/buttons/add-people.php"; ?>
                <?php include "components/buttons/sort-people.php"; ?>
            </div>   
        </div>
    </body>
</html>