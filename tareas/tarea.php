<?php

// a) Declaracion de variables
echo "Declaracion de variables: ". "<br>";
$nombre = "Diego Acosta";
$edad = 36;
$estatura = 1.70;
$esEstudiante = true;
$esExtranjero = false;
$materias = ["Matemáticas", "Física", "Contabilidad", "Informática", "Electrónica"];


echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad. "<br>";
echo "Estatura: " . $estatura. "<br>";
echo "Es estudiante ?" . $esEstudiante. "<br>";

echo "Materias:". "<br>";

echo "<ul>";
for($i = 0; $i < count($materias); $i++){
    echo "<li>" . $materias[$i] . "</li>";
}
echo "</ul> <br> ";



// b) Operaciones aritméticas
echo "Operaciones aritméticas: ". "<br>";
$numeroAleatorio1 = 150;
$numeroAleatorio2 = 350;
$sumaNumerosAleatorios = $numeroAleatorio1 + $numeroAleatorio2;
$restaNumerosAleatorios = $numeroAleatorio1 - $numeroAleatorio2;
$multiplicacionNumerosAleatorios = $numeroAleatorio1 * $numeroAleatorio2;
$divisionNumerosAleatorios = $numeroAleatorio1 / $numeroAleatorio2;
echo "La suma total es: ". $sumaNumerosAleatorios.  "<br>";
echo "La resta total es: ". $restaNumerosAleatorios.  "<br>";
echo "La multiplicacion total es: ". $multiplicacionNumerosAleatorios.  "<br>";
echo "La division total es: ". $divisionNumerosAleatorios.  "<br>";
echo "<br>";

// c) Manipulación de Cadenas
echo "Manipulación de Cadenas: ". "<br>";
echo "Su nombre es: " . $nombre . ", tu edad es: ".$edad . " años"."<br>"   ; 
echo "Longitud de su nombre es: " . strlen($nombre)."<br>";
echo "<br>";

// d) Estructura Condicional

echo "Estructura condicional TRUE: ". "<br>";
if($esEstudiante){
    echo "Usted se encuentra estudiando"."<br>";
}
echo "Estructura condicional FALSE: ". "<br>";
if (!$esExtranjero) {
    echo "Usted es Ecuatoriano" . "<br>";
}

echo "<br>";

// e) Creación de un Array
echo "Materias por indice 1: ". "<br>";
echo $materias[1];

?>