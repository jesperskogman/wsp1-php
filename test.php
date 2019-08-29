<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Jesper";
        
        echo "<h1> Hello $name</h1>";

        $tal1 = 12;
        $tal2 = (int) "235";
        $tal3 = true;
        $tal4 = (int) 235.235;
        $tal5 = null;

        echo $tal1 + $tal2. "$tal2" .+ $tal3 + $tal4 + $tal5;


    ?>
</body>
</html>