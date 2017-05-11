<html>
<head>
    <title>some webpage</title>
</head>
<body>
Hello world!<br>

<form action="process.php" method="post">
    Enter your name:<input name="name" type="text">
    <input type="submit">
</form>

<br>
<?php

    $people = array("Kevin", "Karimah", "Alex");
    
    foreach ($people as $person) {
        echo $person . ' ';
    }    

    $numbers = array(5, 3, 7);
    $sum = 0;

    foreach($numbers as $number) {
        $sum = $sum + $number;
    }

    echo $sum;
   
?>
<br>
<?php

    echo "Hello, world!";

$number = 1;
$number = 2;
$sum = $number + $number2;

    echo $sum;

$loggedIn = true;

    if ($loggedIn == true) {
        echo "You are logged in";
    } else {
        echo "Please log in";
    }

?>

</body>

</html>
