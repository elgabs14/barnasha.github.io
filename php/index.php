<?php
$arrayName = array("Gabs", "Tats", "PULSAT", "Povs", "Jude");
print_r($arrayName);

$name = "Gabs";
echo "<p>My name is $name<p>";
$string1 = "<p>Ola";
$string2 = "k ase</p>";
echo $string1." ".$string2;

$myNumber = 45;
$calculation =  $myNumber * 31 / 97 + 4;
echo $calculation;


if  ($name == "Gabs") {
  echo "<p>Hola $name</p>";
} else {
  echo "<p>Y vos quién sos</p>";
}

$age = 25;

if ($age >= 25) {
  echo "Al pelo";
} else {
  echo "Sos muy joven";
}

echo "<br>";

for ($i = 30; $i >= 3; $i--) {
  echo $i."<br>";
}

$i = 0;

while ($i <= 50) {
  echo $i."<br>";
  $i = $i + 5;
}

$arrayNombres = array("Gabs", "Tats", "PULSAT", "Povs", "Jude");

$j = 0;
while ($j <= sizeof($arrayNombres)) {
  echo $arrayNombres[$j]."<br>";
  $j++;
}

// if ($_GET){
//   $i = 2;
//   $isPrime = true;
//   while ($i < $_GET['numero']) {
//     if ($_GET['numero'] %  $i == 0) {
//       $isPrime = false;
//     }
//     $i++;
//   }
//   if ($isPrime) {
//     echo "<p>".$i." es un número primo</p>";
//   } else{
//     echo "<p>".$i." NO es un número primo</p>";
//   }
// }

print_r($_POST);

if  ($_POST) {
  $access = false;
  $arrayParche = array("Gabs", "Tats", "PULSAT", "Povs", "Jude");
  foreach ($arrayParche as $value) {
    if ($_POST['nombre'] == $value) {
      $access = true;
    }
  }

if ($access) {
    echo "<p>Hola ".$_POST['nombre']."!</p>";
  } else {
    echo "<p>NO existís</p>";
  }
}



?>

<!-- // <p>Por favor ingresa un número entero</p>
// <form>
//   <input type="number" name="numero">
//   <input type="submit" name="Go!">
//
// </form> -->

<p>Por favor ingresa tu nombre</p>
<form method="post">
  <input type="text" name="nombre">
  <input type="submit" value="Go!">
</form>
