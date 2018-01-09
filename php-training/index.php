
<!DOCTYPE html>
<html>
<body>

<?php
$txt = "Hello world!";
$xx = 5;
$y = 10.5;
$p="Pakistan";
$t="Turkey";

$p="Pakistan";
$t="Turkey";

echo $txt;
echo "<br>";
echo $xx;
echo "<br>";
echo $y;
?>
<?php 

echo "<br>" . $p ." and " . $t ." are best friends.<br>";


 ?>

<?php

$x=5; // global scope

function myTest() {
	// using x inside this function will generate and error
	echo"<p>Variable x inside function is: $x</p>";
}

myTest();

echo"<p>Variable x outside function is: $x</p>";


// local scope


function myCest() {

$c=7; // local scope	
	
	// using x inside this function will generate and error
	echo"<p>Variable x inside function is: $c</p>";
}

myCest();

echo"<p>Variable x outside function is: $c</p><br>";


?>

<?php

$a=50;$b=100;

$a=$a+$b;

echo $a."<br><br><br>";

?>

<?php

$a=500;$b=100;

function myFunc1() {
global $a, $b;
$a=$a+$b;

}
myFunc1(); // run function
echo $a;
?>

<?php

$a=500;$b=100;

function myFunc2() {
global $a, $b;
$a-=$b;

}
myFunc2(); // run function


echo "<br>" .$a;

?>

<?php
function myFest() {
    static $z = 0;
    echo $z;
    $z++;
}
echo "<br>";
myFest();
echo "<br>";
myFest();
echo "<br>";
myFest();
echo "<br>";
myFest();
echo "<br>";
myFest();
?>

<?php

$g='asd';
var_dump($g);


// Arrays
$cars = array ("Vitz", "Cultus", "Mehran");
var_dump($cars);

$nums = array (0,1,2,3,4,5,6,7,8,9);
var_dump($nums);


// Object

class Car{
	
		function Car() {
			$this->model = "VW";
		}
	
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;


// ====================== PHP NULL Value
$x = "Hello world!";
$x = null;
var_dump($x);

//================= PHP String Functions
//Get The Length of a String

echo strlen ("Ibtesam Uddin"); echo"<br>";

//Reverse a String	
echo strrev ("Ibtesam Uddin"); echo"<br>";

//Count The Number of Words in a String
echo str_word_count ("Ibtesam Uddin"); echo"<br>";

//Search For a Specific Text Within a String
echo strpos ("Ibtesam Uddin", "Uddin"); echo"<br>";

//Replace Text Within a String
echo str_replace ("Uddin", "Najam", "Ibtesam Uddin"); echo"<br>";

// ====================== PHP Constants

//Create a PHP Constant
define("Greeting", "Welcome~"); echo Greeting . "<br>";

//Create a PHP Constant case-insensitive
define("GReeting", "Welcome!", true); echo greeting . "<br>";

//Constants are Global



function pslFunc(){
define("PSL", "Pakistan Super League Edition 3");
	echo PSL . "<br>";	
}

pslFunc();

echo "here " . PSL . "<br>";

// ====================== PHP - The if Statement

$today = date("d/M/Y"); echo "today is " . $today . "<br>";

if ($today > "01/Jan/2018") {
	echo "Welcome to 2018 <br>";
}
// ====================== PHP - The if...else Statement

$time = date ("H"); echo $time . "<br>";

if ($time < "20"){
	echo "Have a Good Day!<br>";	
} else {
	echo "Have a Good Night!<br>";	
}
// ====================== PHP - The if...elseif....else Statement

$time = ("H");

if ($time < 10){
	echo "Have a good morning!<br>";	
}
elseif ($time < 20){
	echo "Have a good afternoon!<br>";
}
else{
	echo "Have a good night!<br>";
}
// ====================== The PHP switch Statement

$fav_color = "brown";

 switch ($fav_color){
	case "red":
		echo "Red";
		break;
		
	case "yellow":
		echo "yellow";
		break;
		
	case "green":
		echo "green";
		break;
		
	case "black":
		echo "black";
		break;
	default:
		echo"Your favorite color is not here :(<br>";	
 }
// ====================== PHP Loops------------The PHP while Loop
echo "<h1>The PHP while Loop</h1>";
$while_x = 1;

while($while_x <= 10){
	echo "The value is: $while_x <br>";
	$while_x++;
}
// ====================== The PHP do...while Loop

$x = 1;

do{
	echo "Show until its 5: $x <br>";	
	$x++;
}
while($x <= 5);
// ====================== 

$x = 6;

do{
	echo "The number is: $x <br>";	
	$x++;
}	while( $x <= 7 );
// ====================== The PHP for Loop

for( $x=0; $x <= 10; $x++ ) {
	echo "The numbers will be 0-10 here: $x <br>";
}

// ====================== The PHP foreach Loop

$colors = array("red", "green", "yellow", "blue");

foreach( $colors as $value){
	echo "$value <br>";
}
// ====================== PHP 5 Functions

function writeMsg(){
	echo "Pakistan Zindabad <br>";
}

writeMsg();


// ====================== PHP Function Arguments


function familyName($fam_name){
	echo "$fam_name Uddin <br>";
}
familyName("Qamar");
familyName("Najam");
familyName("Sohail");
familyName("Shahab");

// ====================== PHP Default Argument Value


function setHeight( $minHeight = 50){
	echo "The minimum height is : $minHeight <br>";	
}

setHeight(3500);
setHeight();
setHeight(8500);
setHeight();


?>

</body>
</html>