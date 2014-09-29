<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title> harjutus-9 </title>
</head>
<body>
<h2>Funktsiooni defineerimine </h2>
<h3> Argumendita funktsioon </h3>
<?php 
	function say_hello() {
      echo 'Minu esimene funktsioon!<br>';
	}

	say_hello();

?>

<?php
	function say_hello_to($person){
		echo "Tere {$person} ! <br>";
	}

	say_hello_to('Markus');
?>
<h3> Väärtuse tagastamine </h3>

<?php 
	function add($number1, $number2) {
      echo 'kokku ' . ($number1 + $number2);
	}

	add(5, 7);
	add(5, 66);

?>
<?php /* 
	function add($number1, $number2) 


	

$result = add(3, 4); */
?>

<h3> Mitme väärtuse tagastamine </h3>

  <ul>
<?php
  function calculate($nr1, $nr2) {
    $plus = $nr1 + $nr2;
    $minus = $nr1 - $nr2;

    return array($plus, $minus);
  }

  $result = calculate(10, 5);
  echo "<li>summa on {$result[0]} </li>";
  echo "<li>vahe on {$result[1]} </li>";
  ?>

</ul>
 <ol>
 <?php
    function calc($nr1, $nr2) {
    $plus = $nr1 + $nr2;
    $minus = $nr1 - $nr2;

    return array($plus, $minus);
    }

    list($plus, $minus) = array(100, 50);
	echo "<li> summa on {$plus}</li>";
  echo "<li>vahe on {$minus}</li>";
	
?>

</body>
</html>