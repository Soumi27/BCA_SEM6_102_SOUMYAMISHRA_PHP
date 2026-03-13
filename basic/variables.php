<?php
// Single variable
$name = "Soumi";
echo "Value of name: $name\n";

// Variable variable
$var = "message";
$$var = "Hello from variable variable";

echo "Variable name stored in var: $var\n";
echo "Value using variable variable: $message\n";
?>