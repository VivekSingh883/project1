<?php
$number1 = readline("Enter the first number: ");
$number2 = readline("Enter the second number: ");
$sum = $number1 + $number2;
echo "The addition of $number1 and $number2 is: $sum\n";
?>

<?php
$number1 = readline("Enter the first number: ");
$number2 = readline("Enter the second number: ");
$difference = $number1 - $number2;
echo "The subtraction of $number1 and $number2 is: $difference\n";
?>

<?php
// WAP to read 2 numbers and print multiplication
$number1 = readline("Enter the first number: ");
$number2 = readline("Enter the second number: ");
$product = $number1 * $number2;
echo "The multiplication of $number1 and $number2 is: $product\n";
?>

<?php
// WAP to read 2 numbers and print division
$number1 = readline("Enter the first number: ");
$number2 = readline("Enter the second number: ");
if ($number2 != 0) {
    $quotient = $number1 / $number2;
    echo "The division of $number1 by $number2 is: $quotient\n";
} else {
    echo "Error: Division by zero is not allowed.\n";
}
?>

<?php
// WAP to read 2 numbers and print modulus (remainder)
$number1 = readline("Enter the first number: ");
$number2 = readline("Enter the second number: ");
if ($number2 != 0) {
    $remainder = $number1 % $number2;
    echo "The modulus of $number1 and $number2 is: $remainder\n";
} else {
    echo "Error: Modulus by zero is not allowed.\n";
}
?>

<?php
// WAP to read radius and print area and circumference of circle
$radius = readline("Enter the radius of the circle: ");
$area = pi() * pow($radius, 2);
$circumference = 2 * pi() * $radius;
echo "The area of the circle is: $area\n";
echo "The circumference of the circle is: $circumference\n";
?>

<?php
// WAP to read length and breadth and print area and perimeter of rectangle
$length = readline("Enter the length of the rectangle: ");
$breadth = readline("Enter the breadth of the rectangle: ");
$area = $length * $breadth;
$perimeter = 2 * ($length + $breadth);
echo "The area of the rectangle is: $area\n";
echo "The perimeter of the rectangle is: $perimeter\n";
?>



