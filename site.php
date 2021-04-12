<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Domroon's Site</h1>" ;
        echo "<hr>";
        echo "<p>This is my site</p>";
    ?>


    
    <article>
    <?php 
    //Variables
        $characterName = "Tom";
        $characterAge = 44;
        echo "There once was a man named $characterName <br>";
        echo "Hew as $characterAge years old <br>";
        echo "He really liked the name $characterName <br>";
        echo "But he didn't like being $characterAge <br>";
    ?>
    </article>

    
    <article>
    <?php
    //Datatypes
        $phrase = "To be or not to be"; //String
        $age = 30; //Integer
        $gpa = 3.7; //Float
        $isMale = false; //Boolean
    ?>
    </article>
</body>
</html>