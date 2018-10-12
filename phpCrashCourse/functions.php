<?php  
 # Funciton - block of code that can be repeatedly called

 /*
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()
 */

 // create Simple Function
 function simpleFunction(){
     echo 'Hello World';
 }
// Run Simple Function
//  simpleFunction();

 // Function With param
 function sayHello($name = 'World') {
    echo "Hello $name<br>";
 }

// sayHello('Joe');
// sayHello('Bob');
// sayHello('Tim');

// Return value
function addNumbers($num1, $num2) {
    return $num1 + $num2;
}

// echo addNumbers(2, 3);

// By Reference 
$myNum = 10;

function addFive($num) {
    $num += 5;
}

function addTen(&$num) {
    $num += 10;
}

addFive($myNum);
echo "Value: $myNum<br>";
addTen($myNum);
echo "Value: $myNum<br>";

 ?>