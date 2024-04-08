<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SE266</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      li {
        padding-left: 10px;
      }
      .underline {
        text-decoration: underline;
        font-size: 14pt;
        font-style: bold;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-body-tertiary">
    <a class="navbar-brand" href="#" style="padding-left: 20px;">Caroline Warner - SE266</a>
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="https://github.com/carolinewarner22/cwarner_se266">Repository</a>
        </li>
        <li class="nav-item">
          <div class="dropdown test">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Weeks
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="week1/index.php">Week 1</a></li>
                <li><a class="dropdown-item" href="week2/index.php">Week 2</a></li>
                <li><a class="dropdown-item" href="week3/index.php">Week 3</a></li>
                <li><a class="dropdown-item" href="week4/index.php">Week 4</a></li>
                <li><a class="dropdown-item" href="week5/index.php">Week 5</a></li>
                <li><a class="dropdown-item" href="week6/index.php">Week 6</a></li>
                <li><a class="dropdown-item" href="week7/index.php">Week 7</a></li>
                <li><a class="dropdown-item" href="week8/index.php">Week 8</a></li>
                <li><a class="dropdown-item" href="week9/index.php">Week 9</a></li>
                <li><a class="dropdown-item" href="week10/index.php">Week 10</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
        <div class="dropdown test">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Resources
            </button>
            <ul class="dropdown-menu">
              <li class="underline">GIT</li>
              <li><a target="_blank" class="dropdown-item" href="https://docs.github.com/en/get-started/using-git">GitHub Docs</a></li>
              <li><a target="_blank" class="dropdown-item" href="https://www.w3schools.com/git/">W3 Schools for GIT</a></li>
              <li><a target="_blank" class="dropdown-item" href="https://stackoverflow.com/questions/315911/git-for-beginners-the-definitive-practical-guide">Stack Overflow</a></li>
              <li class="underline">PHP</li>

              <li><a target="_blank" class="dropdown-item" href="https://phptherightway.com/">PHP: The Right Way</a></li>
              <li><a target="_blank" class="dropdown-item" href="https://www.w3schools.com/php/">W3 Schools for PHP</a></li>
              <li><a target="_blank" class="dropdown-item" href="https://www.phptutorial.net/">PHP Tutorial</a></li>

            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php
  date_default_timezone_set("America/New_York");
  $file = basename($_SERVER['PHP_SELF']);
  $mod_date = date("F d Y h:i:s A", filemtime($file));
  echo "File last updated $mod_date ";
  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>