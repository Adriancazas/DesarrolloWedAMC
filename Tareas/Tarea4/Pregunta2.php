<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$arreglo = [2, 3, 45, 32, 2, 1, 63, 21, 52, 242, 22, 1];


for ($i = 0; $i < count($arreglo) - 1; $i++) {
    for ($j = 0; $j < count($arreglo) - 1 - $i; $j++) {
        if ($arreglo[$j] > $arreglo[$j + 1]) {
            
            $temp = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j + 1];
            $arreglo[$j + 1] = $temp;
        }
    }
}

echo "Arreglo Ordenado: ";
print_r($arreglo);
?>

</body>
</html>