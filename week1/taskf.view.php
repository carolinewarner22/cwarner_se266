<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Week 1 Activity</title>

        <style>
            header{
                text-align: center;
                background-color: #6f7c80;
                color: #ffffff;
                padding: 1em;
                font-family: Arial, sans-serif;
            }
            nav{
                display: flex;
                justify-content: space-around;
                background-color: #6f7c80;
                font-family: Arial, sans-serif;
                font-size: 24px;
                padding: 1em;
            }
            nav a{
                text-decoration: none;
                color: #ffffff;
            }
            nav a:hover {
                color: #00ffff;
                font-size: 26px;
            }
            h2{
                border-bottom: 2px solid black;
                padding-bottom: 15px;
                font-family: Arial, sans-serif;
                text-align: center;
            }
            p{
                font-size: 20px;
                text-align: center;
                font-family: Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>
                <?php

                //if the value of name isnt provided in the URL (/?name=caroline), then name will default to the value of "You"
                //function htmlspecialchars to "sanitize input" = converting special chars into html entities
                $name = htmlspecialchars(isset($_GET['name']) ? $_GET['name'] : 'You!'); 
                
                $greeting = 'Hello';
                echo $greeting . ', ' . $name;

                ?>
            </h1>
        </header>
        <nav>
            <a href="taskc.php">Task C</a>
            <a href="taskd.php">Task D</a>
            <a href="taske.php">Task E</a>
            <a href="taskf.php">Task F</a>
            <a href="taskg.php">Task G</a>
        </nav>
        <middle>
            <h2>Using a Function to Check Age</h2>
            <!--if the value of key 'age' is greater than or equal to 21... display a <p> tag including value of key 'name' that says person can come in!-->
                <?php if ($person["age"] >= 21): ?>
                    <p><?php echo $person['name']; ?> can come in!</p>

            <!--if the value is less than 21... display name and tell user the person cannot come in!-->
                <?php else: ?>
                    <p><?php echo $person['name']; ?> can't come in.</p>
                <?php endif; ?> 
        </middle>
    </body>
</html>
    
