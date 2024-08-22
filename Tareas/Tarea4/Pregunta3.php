<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$numeros = [23, 45, 12, 89, 6];


$mayor = max($numeros);
$menor = min($numeros);

echo "<div style='border: 2px solid red; padding: 10px; margin: 10px;'>";
echo "El mayor número es: $mayor";
echo "</div>";

echo "<div style='border: 2px solid red; padding: 10px; margin: 10px;'>";
echo "El menor número es: $menor";
echo "</div>";
?>

</body>
</html>