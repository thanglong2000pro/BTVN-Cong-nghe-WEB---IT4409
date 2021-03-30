<HTML>
    <HEAD><TITLE>Stringtest</TITLE></HEAD>
    <BODY>
        <p>This is going to be ignored by the PHP interpreter.</p>
<?php echo '<p>While this is going to be parsed.</p>'; ?>
<p>This will also be ignored by the PHP preprocessor.</p>
<?php print('<p>Hello and welcome to <i>my</i> page!</p>');
?>
<?php
//This is a comment
/*
This is
a comment
block
*/
?>
 <p>
<?php
$foo = true; if ($foo) echo "It is TRUE! <br /> \n";
$txt='1234'; echo "$txt <br /> \n";
$a = 1234; echo "$a <br /> \n";
$a = -123;
echo "$a <br /> \n";
$a = 1.234;
echo "$a <br /> \n";
$a = 1.2e3;
echo "$a <br /> \n";
$a = 7E-10;
echo "$a <br /> \n";
echo 'Arnold once said: "I\'ll be back"', "<br /> \n";
$beer = 'Heineken';
echo "$beer's taste is great <br /> \n";
$str = <<<EOD
Example of string
spanning multiple lines
using “heredoc” syntax.
EOD;
echo $str;
?>
</p>
<?php
$arr = array(5 => 1, 12 => 2);
foreach ($arr as $key => $value) { echo $key, '=>',$value; }
$arr[] = 56; // the same as $arr[13] = 56;
$arr["x"] = 42; // adds a new element
unset($arr[5]); // removes the element
unset($arr); // deletes the whole array
$a = array(1 => 'one', 2 => 'two', 3 => 'three');
unset($a[2]);
$b = array_values($a);
?>
<?php
// Valid constant names
define("FOO", "something");
define("FOO2", "something else");
define("FOO_BAR", "something more");
// Invalid constant names (they shouldn’t start
// with a number!)
define("2FOO", "something");
// This is valid, but should be avoided:
// PHP may one day provide a "magical" constant
// that will break your script
define("__FOO__", "something");
?>
<?php
$d=date("D");
echo $d, "<br/>";
if ($d=="Fri")
echo "Have a nice weekend! <br/>";
else
echo "Have a nice day! <br/>";
$x=10;
if ($x==10)
{
echo "Hello<br />";
echo "Good morning<br />";
}
?>
<?php
$x = rand(1,5); // random integer
echo "x = $x <br/><br/>";
switch ($x)
{
case 1:
echo "Number 1";
break;
case 2:
echo "Number 2";
break;
case 3:
echo "Number 3";
break;
default:
echo "No number between 1 and 3";
break;
}
?>
<?php
$i=1;
while($i <= 5)
{
echo "The number is $i <br />";
$i++;
}
?>
<?php
$i=0;
do
{
$i++;
echo "The number is $i <br />";
}
while($i <= 10);
?>
<?php
$a_array=array("a","b","c");
foreach ($a_array as $key => $value)
{
echo $key . " = " . $value . "\n";
}
?>
<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
echo "Example function.\n";
return $retval;
}
?>
<?php
$a = 1;
$b = 2;
function Sum()
{
global $a, $b;
$b = $a + $b;
}
Sum();
echo $b;
?>
<?php
// Show all PHP information
phpinfo();
?>
<?php
// Show only the general information
phpinfo(INFO_GENERAL);
?>
    </BODY>
</HTML>

