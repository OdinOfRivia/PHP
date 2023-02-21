<?php
# Function - just a block of code that can be repeatedly called

/*
- Camel Case - myFunction()
- Lower Case - my_function()
- Pascal Case - MyFunction() ----- used for classes
 */

//Create a simple function

function simpleFunction(){
    echo 'Hello Simple Function';
    echo '<br>';
}

simpleFunction();

echo '<hr>';
// with params 

function anotherFunctioon($name = 'World'){
    echo 'Hello ' . $name;
    echo '<br>';
   
}


anotherFunctioon("Odin");
anotherFunctioon();
echo '<hr>';

//with return 

function addNumber ($num1, $num2){
    return $num1 + $num2;
}

echo addNumber(5,3);
echo '<hr>';


//pass by value / reference

$myNum = 7;
function addFive($num){ //pass by value 
    $num += 5;
}

addFive($myNum);
echo $myNum;


/////////
echo '<hr>';
// & important to include before the param!!
function addTen(&$num){
    $num += 10;
}

addTen($myNum);

echo $myNum;

