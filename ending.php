<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/ending.css">
        <title>The End</title>
    </head>
    <body>
        <?php 
            // BACKGROUND
            include "components/background.php"; 
        ?>

        <!-- TEXT -->
        <div class="ending">
            <h1>
                You made it!
            </h1>
            
            <img src="assets/images/ending.gif" alt="The Harry Potter cast clapping their hands">
            
            <br>

            <p class="done">
                That's it, you sorted everyone. Thank you for participating in our beautiful ceremony.
            </p>

            <div class="buttons">
                <?php 
                    include "components/buttons/results.php";
                    include "components/buttons/add-people.php";
                ?>
            </div>
        </div>
    </body>
</html>