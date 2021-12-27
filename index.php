<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sorting Ceremony</title>
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    </head>
    
    <body>

        <!-- BACKGROUND -->
        <?php 
            include "components/background.php"; 
        ?>

        <!-- WELCOME TEXT -->
        <div class="welcome">
            <h1>
                Welcome to the sorting ceremony!
            </h1>
        
            <p class="sorting-song">
                Oh you may not think I'm pretty,
                But don't judge on what you see, <br>
                I'll eat myself if you can find
                A smarter hat than me.
                <br>
                <br>
                You can keep your bowlers black,
                Your top hats sleek and tall, <br>
                For I'm the Hogwarts Sorting Hat 
                And I can cap them all.
                <br>
                <br>
                There's nothing hidden in your head
                The Sorting Hat can't see, <br>
                So try me on and I will tell you 
                Where you ought to be.
                <br>
                <br>
                You might belong in Gryffindor,
                Where dwell the brave at heart, <br>
                Their daring, nerve, and chivalry
                Set Gryffindors apart;
                <br>
                <br>
                You might belong in Hufflepuff,
                Where they are just and loyal, <br>
                Those patient Hufflepuffs are true 
                And unafraid of toil;
                <br>
                <br>
                Or yet in wise old Ravenclaw,
                if you've a ready mind, <br>
                Where those of wit and learning, 
                Will always find their kind;
                <br>
                <br>
                Or perhaps in Slytherin 
                You'll make your real friends,<br>
                Those cunning folks use any means
                To achieve their ends.
                <br>
                <br>
                So put me on! Don't be afraid! 
                And don't get in a flap!<br>
                You're in safe hands (though I have none)
                For I'm a Thinking Cap!
            </p>

            <!-- BUTTONS -->
            <div class="buttons">
                <?php include "components/buttons/add-people.php"; ?>
                <?php include "components/buttons/sort-people.php"; ?>
            </div>
            
        </div>
    </body>
</html>