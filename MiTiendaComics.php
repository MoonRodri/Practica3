<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
];

// Main
// Antes del descuento
mostrarComicsEnTabla();
mostrarValorAlmacen();
aplicarDescuentoManga();
// Después del descuento
mostrarComicsEnTabla();
mostrarValorAlmacen();

// Función para mostrar los cómics en una tabla HTML
function mostrarComicsEnTabla()
{
    global $inventario;
    echo '<br>';
    echo '<table border="1">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}

// calcular y mostrar el valor total del almacén
function mostrarValorAlmacen()
{
    global $inventario;
    $valorTotal = 0;

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            $valorTotal += $comic['precio'] * $comic['stock'];
        }
    }

    echo "<br>Total valor almacén es: " . number_format($valorTotal, 2);
}

// aplicar un descuento del 30% a los cómics en japonés
function aplicarDescuentoManga()
{
    global $inventario;

    foreach ($inventario as $categoria => &$comics) {
        foreach ($comics as &$comic) {
            if ($comic['idioma'] == 'Japonés') {
                $comic['precio'] = $comic['precio'] * 0.7; // Aplicar descuento del 30%
            }
        }
    }
}
?>
