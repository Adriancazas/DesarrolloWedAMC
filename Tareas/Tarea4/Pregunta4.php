<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<table border='1' cellpadding='10' cellspacing='0'>";

for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        $total = $row + $col;
        if ($total % 2 == 0) {
            echo "<td style='background-color: black; width: 40px; height: 40px;'></td>";
        } else {
            echo "<td style='background-color: white; width: 40px; height: 40px;'></td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>