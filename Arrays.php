<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
// El array contiene las claves: nombre, apellido, edad, ciudad.
$persona = array(
    "dato 1º" => "Sara",
    "dato 2º" => "Martínez",
    "dato 3º" => 23,
    "dato 4º" => "Barcelona"
);

// Se utiliza foreach porque es una forma sencilla y clara de iterar sobre arrays asociativos.
foreach ($persona as $clave => $valor) {
    echo  $clave.": " . $valor . "<br>";
}
?>

<?php

//array creado en el ejercicio 1.
$persona = array(
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

// acceder tanto a las claves como a los valores.
echo "<h1>Ejercicio 2</h1>";
foreach ($persona as $clave => $valor) {
    echo $clave .": ".  $valor . "<br>";
}
?>
<h1> Ejercicio 3 </h1>
<?php

//array creado en el ejercicio 1.
$persona = array(
    "dato 1º" => "Sara",
    "dato 2º" => "Martínez",
    "dato 3º" => 23,
    "dato 4º" => "Barcelona"
);

// Modificar la edad a 24
$persona["dato 3º"] = 24;

// Mostrar toda la información del array actualizada
foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}
?>

<h1> Ejercicio 4 </h1>
<?php

//array creado y modificado previamente.
$persona = array(
    "nombre" => "Sara",
    "apellido" => "Martínez",
    "edad" => 24, // La edad ya se modificó en el ejercicio anterior.
    "ciudad" => "Barcelona"
);

// Eliminar la clave "ciudad" del array
// Se utiliza la función unset() para eliminar "ciudad".
unset($persona["ciudad"]);

//Mostrar toda la información del array con var_dump
// var_dump es útil para depuración, ya que muestra el contenido y estructura del array.
var_dump($persona);
?>

<h1> Ejercicio 5 </h1>
<?php
// Cadena de texto inicial
$letters = "a,b,c,d,e,f";

//Crear un array separando la cadena por comas
// Se usa la función explode() para convertir la cadena en un array.
$array_letters = explode(",", $letters);

// 3. Ordenar el array en orden descendente
// Se utiliza la función rsort(), que ordena el array en orden descendente.
rsort($array_letters);

// 4. Mostrar la información del array ordenado
// Se recorre el array con un foreach para mostrar sus valores.
foreach ($array_letters as $letter) {
    echo $letter . "<br>";
}
?>

<h1> Ejercicio 6 </h1>
<?php

//array asociativo con los nombres y sus respectivas notas
$notas = array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);

// función arsort() que mantiene la asociación entre claves y valores mientras ordena los valores en orden descendente.
arsort($notas);

// notas ordenadas
echo "Notas de los estudiantes:";
foreach ($notas as $nombre => $nota) {
    echo " ".$nombre. ": " .$nota;
}
?>

<h1> Ejercicio 7 </h1>
<?php
// Archivo: Arrays.php

// array asociativo con las notas de los estudiantes
$notas = array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);
arsort($notas);
// media de las notas
// array_sum() para sumar las notas y count() para contar el número de estudiantes.
$media = array_sum($notas) / count($notas);

// Mostrar la media con 2 decimales
// Se utiliza number_format() para formatear la media a 2 decimales.
echo "Media de las notas es: " . number_format($media, 2) . "<br>";

// Mostrar los nombres de los alumnos con nota superior a la media
echo "Alumnos con nota superior a la media:<br>";
foreach ($notas as $nombre => $nota) {
    if ($nota > $media) {
        echo $nombre . "<br>";
    }
}
?>

<h1> Ejercicio 8 </h1>
<?php
// array asociativo con las notas de los estudiantes
$notas = array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);

//nota más alta
// Se utiliza la función max() para obtener el valor más alto del array.
$nota_maxima = max($notas);

// nombre del alumno con la nota más alta
// Se recorre el array y se compara cada nota con la nota más alta.
$mejor_alumno = "";
foreach ($notas as $nombre => $nota) {
    if ($nota == $nota_maxima) {
        $mejor_alumno = $nombre;
        break;
    }
}

//Mostrar el resultado
echo "La nota más alta es ".$nota_maxima." y el mejor alumno es ".$mejor_alumno.".<br>";
?>

</body>
</html>