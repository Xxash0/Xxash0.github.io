<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>homework4-3</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  숫자: <input type="number" name="name">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


<?PHP
if($name <= 100) {
    echo "입력한 숫자:$name<br>";
    echo ("<br>");
    echo " 피보나치 수열:";

echo ("<br>");


function fibo($name)
{
if($name ==  0 || $name ==1) return (1);
return (fibo($name-1) + fibo($name -2));
}
for ($i=1; $i <= $name; $i++)
print(fibo($i - 1))."<br> ";

?>

<?php
$a = 1;
$b = 1;
echo "비례:<br>";

for($i = 0; $i < $name; $i++)
{
echo $b / $a."<br> ";
$c = $b +$a;
$a = $b;
$b = $c;
}
}
else {
    echo "100이하의 숫자를 입력하시오";
}

?> 


</body>
</html>