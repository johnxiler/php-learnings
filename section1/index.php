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
    echo "I like programming";
    ?>
</body>
</html>