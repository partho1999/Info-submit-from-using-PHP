<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <div class="container">
                this is my first php website
                <?php
                        echo "this is printed by PHP";
                        // secret algo
                        echo "<br>";
                ?>

                <?php
                        echo "this is printed by PHP again";
                        // variable
                        $variable1= 30;
                        $variable2= 54;

                        echo $variable1;
                        echo $variable2;
                        echo $variable1 + $variable2;
                        echo "<br>";

                        // Arithmetic Operators 
                        echo "<br>";
                        echo "The value of varible1 + variable2 is ";
                        echo $variable1 + $variable2;
                        echo "<br>";
                        echo "The value of varible1 - variable2 is ";
                        echo $variable1 - $variable2;
                        echo "<br>";
                        echo "The value of varible1 * variable2 is ";
                        echo $variable1 * $variable2;
                        echo "<br>";
                        echo "The value of varible1 / variable2 is ";
                        echo $variable1 / $variable2;
                        echo "<br>";
                        // Assignment Operators
                        $newvar = $variable1;
                        $newvar += 1;
                        echo "new var value is:";
                        echo $newvar;
                        echo "<br>";
                        $newvar -= 1;
                        echo "new var value is:";
                        echo $newvar;
                        echo "<br>";
                        $newvar *= 2;
                        echo "new var value is:";
                        echo $newvar;
                        echo "<br>";
                        $newvar /= 1;
                        echo "new var value is:";
                        echo $newvar;
                        echo "<br>";
                        // Comparison Operators
                        // echo "<h1> Comparison Operators </h1>";
                        echo "The value of 1==4 is ";
                        echo var_dump(1==4);
                        echo "<br>";

                        echo "The value of 1!=4 is ";
                        echo var_dump(1!=4);
                        echo "<br>";

                        echo "The value of 1>=4 is ";
                        echo var_dump(1>=4);
                        echo "<br>";

                        echo "The value of 1<=4 is ";
                        echo var_dump(1<=4);
                        echo "<br>";

                        // Increment/Decrement Operators 
                        echo $variable1++;
                        echo "<br>";
                        echo $variable1--;
                        echo "<br>";
                        echo ++$variable1;
                        echo "<br>";
                        echo --$variable1;
                        echo "<br>";
                        echo $variable1;
                        // Logical Operator
                        // and (&&)
                        // or (||)
                        // xor 
                        // !

                        // $myVar = (true and true);
                        // $myVar = (false and true);
                        // $myVar = (false and false);
                        // $myVar = (true and false);
                        // $myVar = (true or false);

                        // $myVar = (true xor true);
                        // $myVar = (false and true);
                        // $myVar = (false xor false);
                        $myVar = (true and false);
                        echo "<br>";
                        echo var_dump($myVar);
                ?>
        </div>
</body>
</html>
