<!-- GETTING STARTER WITH PHP -->
<?php
    echo"Hello World! <br>";
    echo"Hello!!";
    // This is a comment
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>Order Pizza</button>
</body>
</html>
<br>
<br>


<!-- VARIABLES -->
<?php
    $name = "Luis Lozoya";
    $food = "Pizza";
    $email = "luis@gmail.com";
    $age = 21;
    $users = 2;
    $total = 20.44;

    echo "Hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email} <br>";
    echo "You are {$age} years old <br>";
    echo "You have {$users} users <br>";

    echo "Your total is \${$total}"
?>