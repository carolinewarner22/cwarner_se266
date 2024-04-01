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
            ul {
                font-size: 20px;
                font-family: Arial, sans-serif;
                border: 2px solid black;
                padding: 25px;
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
            <h2>Task List with Completion Status Using Booleans</h2>
            <ul>

                <li>
                    <strong>Name: </strong><?= $task['title']; ?>
                </li>

                <li>
                    <strong>Perform By: </strong><?= $task['due']; ?>
                </li>

                <li>
                    <strong>Person Responsible: </strong><?= $task['assigned_to']; ?>
                </li>

                <li>
                    <strong>Completed? </strong>

                    <?php if ($task['completed']) : ?>
                        <span class="icon">&#9989;</span>
                    <?php else : ?>
                        <span class="icon">&#10060;</span>
                    <?php endif; ?>                    

                </li>

            </ul>
        </middle>
    </body>
</html>
    
