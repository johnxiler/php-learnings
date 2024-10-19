<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // phpinfo(); 
    $name = "relix";
    echo "Hello ", $name; //echo is for more strings
    print "\nprint "."this.... <br>"; // print is for one string it returns one string only unless concatenate strings
    //single line comment
    /*
    multiline comments
    */
    //line break lesson
    // lets a function echo nl2br();
    // echo "my name is", $name,"\r\n";
    echo nl2br("my name is $name \r\n ");
    echo "I live in The Philippines <br>";
    echo "I like programming <br>";
    // a variable is a symbol or name that stands for a value
    //Variable name starts with a letter A-Z a-z, undescore(_), followed by any number of letters, numbers, or undescores.
    // just use PascalCase
    // if variablename starts with a number after the dollar sign it is invalid  
    $price = 45;
    // $4hash = 453453; invalid variable...
    echo "can i buy $price <br>";
    echo "haha {$price} <br>";
    //echo 'haha {$price}'; //this doesnt work
    echo 'haha'. $price; // this will work concatenation for single qoutes
    echo "haha". $price; // this will work also you have to use your own preferences
    ?>
</body>
</html>