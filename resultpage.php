<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="assets/css/results.css" type="text/css">
</head>
<body>
    <?php   
        // BACKGROUND
        include "components/background.php"; 
    ?>

    <div class="container">
        <div class="result">
            RESULTS: <br>
            <span class="keys">
                <div class="centered">
                    <span class="gryffindor">Gryffindor =<img src="assets/images/Gryffindor-Logo.png" alt="gryffindor logo"></span>
                    <span class="hufflepuff">Hufflepuff =<img src="assets/images/Hufflepuff-logo.png" alt="hufflepuff logo"></span>
                    <span class="ravenclaw">Ravenclaw =<img src="assets/images/Ravenclaw-Logo.png" alt="ravenclaw logo"></span>
                    <span class="slytherin">Slytherin =<img src="assets/images/Slytherin_Logo.png" alt="slytherin logo"></span>
                </div>
            </span>
        </div>
        <div class="buttons">
            <?php include "components/buttons/homepage.php"; ?>
        </div> 
    </div>

    <script src="assets/js/script.js"></script>
</body>
</html>