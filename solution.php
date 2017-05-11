<html>
<head><title>Solution</title></head>

<body>

<p>Your solution is:</p>

<?php

    if (isset($_POST['submit']))
    {

        $number = $_POST['number'];
        $number2 = $_POST['number2'];
        $operator = $_POST['operator'];

        switch ($operator)
        {
            case "Add":
            echo $number + $number2;
            break;

            case "Subtract":
            echo $number - $number2;
            break;

            case "Multiply":
            echo $number * $number2;
            break;

            case "Divide":
            echo $number / $number2;
            break;     
        }
    }
       
?>
</body>
</html>
