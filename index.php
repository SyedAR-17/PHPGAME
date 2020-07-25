<!DOCTYPE html>
<html>
  <head>
    <title>
      Syed Abdul Rehman Peerzada
    </title>
  </head>
<body>
  <h1>
    Guessing Game
  </h1>
  <p>
    <?php
        if(! isset($_GET['guess']))
        {
          echo("No number entered");
        }
        else if(strlen($_GET['guess']<1))
        {
          echo("Number is less than 1");
        }
        else if(! is_numeric($_GET['guess']))
        {
          echo("You did not enter a number");
        }
        else if($_GET['guess']>23)
        {
          echo("Number is too large");
        }
        else if($_GET['guess']<23)
        {
          echo("Number is too small");
        }
        else
        {
          echo("Your number is correct !!");
        }
    ?>
  </p>

</body>
</html>