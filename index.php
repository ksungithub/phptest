<html>
<head><title>Simple calculator</title></head>

<body>
<form method="post">
    Input your first integer:<input name="number" type="text"><br>
    Input your second integer:<input name="number2" type="text"><br><br>

    Select an operation:<br>
    <select name="operator">
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>

    

    <input type="submit" name="submit" value="submit">

</form>

<p>The answer is:</p>
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
