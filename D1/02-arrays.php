<?php

/* Array - variable that hold multiple values
- Indexed
- Associative
- Multi-dimensional
 */



# Indexed
 $people1 = array('Kevin', 'Jeremy', 'Clarkson');
 $people2 = ['Kevin', 'Jeremy', 'Clarkson'];
 $people1[3] = 'Cherry';

//echo $people; //prints data type
echo '<hr>';
echo count($people1); //prints the lenght

echo '<hr>';
print_r($people1); // prints index and value

echo '<hr>';
var_dump($people2); // prints index, datatype, value



#Associative - allows you to define the key and the value

$peopleAssoc = array('Brad' => 35, 'Joseph' => 22, 'William' =>38);


//Associative array
// when we define numbers with a key, it kinda becomes the indexValue!
$IDs = [22 => 'Brad', 44 => 'Joseph', 65 => 'William'];


print_r($peopleAssoc);
echo '<hr>';
echo $IDs[65];
echo '<hr>';
echo count($IDs);
echo '<hr>';


#Multi-dimensional - nested array
$cars = array(
    array('Honda', 20, 5),
    array('Toyota', 10, 3),
    array('Ford', 4, 3)
);

echo $cars[0][2];
echo '<hr>';