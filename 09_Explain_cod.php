<!-- What will be the values of $a and $b after the code below is executed?
Explain your answer. -->

<?php
$a = '1'; 

// here variable a assigned the string value '1'
$b = &$a;

/* In this step create reference variable b to variable a. Means both the variable refer same memory location
   if we changes variable b value it reflect in variable a and vice versa*/

$b = "2$b";

/* string concantenation uses in this step 2$b evaluate as '2'.'1' means '21'
    and this new value assign to $b  */
/* $b reference to $a that means this change also effect on $a*/ 

echo "$a, $b";

/* that means both variable have value '21' */
?>