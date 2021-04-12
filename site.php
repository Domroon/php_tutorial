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

    <article>
    <h2>Work With Strings</h2>
    <?php

        $phrase = "Giraffe Academy";
        echo $phrase; //print String
        echo "<br>";
        echo strtolower($phrase); //convert to lower case
        echo "<br>";
        echo strtoupper($phrase); //conver to upper case 
        echo "<br>";
        echo strlen($phrase); //get String length
        echo "<br>";
        echo $phrase[0]; //get first character
        echo "<br>";
        echo $phrase[1]; //get second character
        echo "<br>";
        echo str_replace("Giraffe", "Panda", $phrase); //replace first String with second String in the third String
        echo "<br>";
        echo substr($phrase, 8); //Get a the String behind the index-number
        echo "<br>";
        echo substr($phrase, 8, 3); //Get three letters behind index 8 of the String

    ?>
    </article>

    <article>
    <h2>Work With Numbers</h2>
    <?php
        echo 40;      //positive Integer
        echo "<br>";
        echo -40;     //Negative Integer
        echo "<br>";
        echo 5.7 * 9; //Mulplication
        echo "<br>";
        echo 10 % 3; //Modulo
        echo "<br>";
        echo 4 + 5 *10; //Math rule 'point before line'
        echo "<br>";
        $num = 10;
        echo $num * $num;
        $num++;
        echo "<br>";
        echo $num;
        $num += 2;
        echo "<br>";
        echo $num;
        echo "<br>";
        echo abs(-100);
        echo "<br>";
        echo pow(2,3);
        echo "<br>";
        echo sqrt(9);
        echo "<br>";
        echo max(42, 10);
        echo "<br>";
        echo min(42, 10);
        echo "<br>";
        echo round(3.2);
        echo "<br>";
        echo round(3.5);
        echo "<br>";
        echo ceil(3.1);
        echo "<br>";
        echo floor(3.9);
    ?>
    </article>

    <article>
    <h2>Getting User Input</h2>
        <form action="site.php" method="get">
            Email: <input type="text" name="email">
            <input type="submit">
        </form>
        <br>
        <?php
            echo $_GET["email"]
        ?>
    </article>
</body>
</html>