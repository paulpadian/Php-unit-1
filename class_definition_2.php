<?php
// declare class
class Cars{
    //inside class definition, methods or functions
    //when saved php knows what you created
}

// declare variable and use function to declare 
// php will automatically add classes to the variable that we've declared
$my_classes = get_declared_classes();

//lets loop with foreach to look at my_classes and echo the individual class

foreach ($my_classes as $class) {
    echo $class . '<br>';
}

?>