<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Tutorial</title>
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
            echo $_GET["email"];
        ?>
    </article>

    <article>
    <h2>Simple Calculator</h2>
        <form action="site.php" method="get">
            First Number: <input type="text" name="first_number"><br>
            Second Number: <input type="text" name="second_number"><br>
            Choose an Operator:<br>
            <input type="radio" id="plus" name="operator" value="+">
            <label for="plus">+</label><br>
            <input type="radio" id="minus" name="operator" value="-">
            <label for="minus">-</label><br>
            <input type="submit">
        </form>
        <br>
        <?php
            $first = $_GET["first_number"];
            $second = $_GET["second_number"];
            $op = $_GET["operator"];
            $result = 0;
            if($op == '+'){
                $result = $first + $second;
            }
            else {
                $result = $first - $second;
            }
            echo "Result: $result";
        ?>
    </article>

    <article>
    <h2>URL Parameters</h2> <!--For Informations that should be public available (not secure)-->
    
        <form action="site.php" method="get">
        Name: <input type="text" name="name"> <br>
        <input type="submit">
        </form>

        <?php
            echo $_GET["name"]; //can edit in URL 
            echo"<br>";
            echo $_GET["age"]; // you can add this via the URL Parameter (add &age=42)
        ?>
    
    </article>

    <article>
    <h2>POST VS GET</h2> 
    
        <form action="site.php" method="post"> <!-- Not shown in the URL (more secure) -->
            Password: <input type="password" name="password"> <br>
            <input type="submit">
        </form>

        <?php
            echo $_POST["password"]; 
        ?>
    
    </article>

    <article>
    <h2>Arrays</h2> 
        <?php
            $friends = array("Kevin", "Karen", "Oscar", "Jim");
            $friends[4] = "Angela";
            echo $friends[0];
            echo "<br>";
            echo $friends[2];
            echo "<br>";
            echo count($friends);
        ?>
    </article>

    <article>
    <h2>Using Checkboxes</h2> 
        <form action="site.php" method="post"> 
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">
        </form>
        <?php
            $fruits = $_POST["fruits"];
            echo $fruits[1];
        ?>
    </article>

    <article>
    <h2>Associative Arrays</h2> 
        <form action="site.php" method="post"> 
            Name: <input type="text" name="student"> <br>
            <input type="submit">
        </form>
        <?php
            $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
            $grades["Jim"] = "F";
            echo $grades["Oscar"];
            echo "<br>";
            echo count($grades);
            echo "<br>";
            echo "This is your grade:";
            echo $grades[$_POST["student"]];
        ?>
    </article>

    <article>
    <h2>Functions</h2> 
        <?php
            function sayHi($name, $age){
                echo "Hello $name, you are $age <br>";
            }
            sayHi("Domroon", 26);
            sayHi("Hansi", 13);
            sayHi("Gabi", 80);
        ?>
    </article>

    <article>
    <h2>Return Statements</h2> 
        <?php
            function cube($num){
                return $num * $num * $num;
            }
            echo cube(2);
        ?>
    </article>

    <article>
    <h2>If Statements</h2> 
        <?php
            $isMale = true;
            $isTall = true;
            if($isMale && $isTall){
                echo "You are a tall male";
            }
            elseif($isMale && !$isTall){
                echo "You are a not tall male";
            }
            elseif(!$isMale && !$isTall){
                echo "You are not male and not tall";
            }
            else {
                echo "You are not male but tall";
            }

        ?>
    </article>

    <article>
    <h2>If Statements 2</h2> 
        <?php
            function getMax($num1, $num2){
                if($num1 >= $num2){
                    return $num1;
                }
                else {
                    return $num2;
                }
            }

            echo getMax(42, 43);
        ?>
    </article>

    <article>
    <h2>Switch Statements</h2> 
    <form action="site.php" method="post"> 
            <h3>Whats was your grade?</h3>
            <input type="text" name="grade"> <br>
            <input type="submit">
        </form>
        <?php
            $grade = $_POST["grade"];
            switch($grade){
                case "A":
                    echo "You did amazing!";
                    break;
                case "B":
                    echo "You did pretty good!";
                    break;
                case "F":
                    echo "You fail";
                    break;
                default:
                    echo "Not a valid grade :(";
                    break;
            }
        ?>
    </article>

    <article>
    <h2>While Loops</h2> 
        <?php
           $index = 1;
           while($index <= 5){
                echo "$index <br>";
                $index++;
           }
           $index = 1;
           do {
                echo "$index <br>";
                $index++;
           } while($index <= 5);
       
        ?>
    </article>

    <article>
    <h2>For Loops</h2> 
        <?php
           for($i=1; $i<=9; $i++) {
               echo "$i <br>";
           }

           echo "<br>";

           $luckynumbers = array(4, 8, 14, 16, 23, 42);
           for($i=0; $i <= count($luckynumbers); $i++) {
               echo "$luckynumbers[$i] <br>";
           }
        ?>
    </article>

    <article>
    <h2>Including html</h2> 
        <?php include "header.html" ?>    
        <p>Hello World</p>
        <?php include "footer.html" ?>
        
    </article>

    <article>
    <h2>Including php</h2> 
        <?php
            $title = "My first Post";
            $author = "Domroon";
            $wordCount = 400;  
            include "article-header.php"; //put the varibles before in this

            include "usefull-tools.php";
            sayBye("Domroon"); //from usefull-tools.php
            echo $feetInMile; //from usefull-tools.php
        ?>       
    </article>

</body>
</html>