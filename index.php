<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $className = $_REQUEST["class"];

    function checkClassName($string)
    {
        $pattern = '/^[A|C|P]+[0-9]{4,}[G|H|I|K|L|M]{1,}$/';
        if (preg_match($pattern, $string))
        {
            echo "This class name is valid";
        } else {
            echo "This class name is not valid";
        }
    }
    checkClassName($className);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Class Name: </label>
    <br>
    <input type="text" name="class">
    <br>
    <button type="submit">CheckName</button>
    <br>
</form>
</body>
</html>
