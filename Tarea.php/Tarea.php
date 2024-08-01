<?php
$integerVar = 25; // Entero
$floatVar = 10.5; // Flotante
$stringVar = "Hola Mundo"; // Cadena de texto
$booleanVar = false; // Booleano
$arrayVar = array("PHP", "JavaScript", "Python", "Java", "C#"); // Arreglo
?>
<?php
// Suma
$suma = $integerVar + $floatVar;

// Multiplicación
$multiplicacion = $integerVar * 2;

echo "La suma de $integerVar y $floatVar es: $suma<br>";
echo "El producto de $integerVar y 2 es: $multiplicacion<br>";
?>
<?php
// Concatenación
$otraCadena = " Programación";
$cadenaConcatenada = $stringVar . $otraCadena;

// Longitud de la cadena
$longitudCadena = strlen($cadenaConcatenada);

echo "Cadena concatenada: $cadenaConcatenada<br>";
echo "Longitud de la cadena concatenada: $longitudCadena<br>";
?>
<?php
if ($booleanVar) {
    echo "La variable booleana es verdadera<br>";
} else {
    echo "La variable booleana es falsa<br>";
}
?>
<?php
// Mostrar el tercer elemento del array
echo "El tercer elemento del array es: " . $arrayVar[2] . "<br>";
?>
