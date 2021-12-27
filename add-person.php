<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="assets/css/add-person.css">
        <title>Who you gonna sort?</title>
    </head>
    <body>
        <!-- BACKGROUND -->
        <?php 
            include "components/background.php"; 
        ?>

        <!-- HOGWARTS EXPRESS -->
        <div class="image">
            <img src="assets/images/hogwarts-express.png" alt="hogwarts express" class="img">
        </div>


        <!-- BOX -->
        <div class="container">
            <!-- TITLE -->
            <div class="title">Who you gonna sort?</div>

            <!-- FORM -->
            <form action="person-added.php" method="POST" id="form">
                <div class="user-details">
                    <!-- FIRSTNAME -->
                    <div class="input-box">
                        <label for="firstname" class="details">First Name</label>
                        <input type="text" name="firstname" class="firstname-style" id="firstname" placeholder="Enter your first name"/>
                    </div>

                    <!-- LASTNAME -->
                    <div class="input-box">
                        <label for="lastname" class="details">Last Name</label>
                        <input type="text" class="lastname-style" name="lastname" id="lastname" placeholder="Enter your last name"/>
                    </div>

                    <!-- AGE -->
                    <div class="input-box">
                        <label for="age" class="details">Age</label>
                        <input type="number" name="age" class="age-style" id="age" placeholder="Enter your age"/>
                    </div>

                    <!-- DETAILS -->
                    <div class="input-box">
                        <label for="details" class="details">Bio</label>
                        <input type="text" class="details-style" name="details" id="details" placeholder="Write something about yourself"/>
                    </div>
                    
                </div>

                <!-- GENDER -->
                <div class="gender-details">                    
                    <span class="gender-title">Gender</span>

                    <div class="category">
                        <input type="radio" name="gender" value="Female" id="female" checked>
                        <label for="female">
                            Female
                        </label>

                        <input type="radio" name="gender" value="Male" id="male">
                        <label form="male">
                            Male
                        </label>

                        <input type="radio" name="gender" value="Non-binary" id="non-binary">
                        <label form="non-binary">
                            Non-binary
                        </label>
                        
                        <input type="radio" name="gender" value="Other" id="other">
                        <label form="other">
                            Other
                        </label>
                    </div>

                </div>
                
                <!-- SUBMIT -->
                <div class="button">
                    <input type="submit" Value="Add person">
                </div>
            </form>
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/js/add-person.js"></script>
    </body>
</html>