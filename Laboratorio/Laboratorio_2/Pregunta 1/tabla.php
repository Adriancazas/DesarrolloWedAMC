<style>
    #tds {
        width: 40px;
        height: 25px;
        background-color: aquamarine;
    }

    #tds2 {
        width: 40px;
        height: 25px;
        background-color: red;
        color: black;
        font-weight:bold;
    }
</style>

<table border=1 style='border-collapse: collapse;'>
<?php

$filas = $_POST['filas'];
$columnas = $_POST['columnas'];

echo $filas . " x " . $columnas;

for($i=$filas;$i>=1;$i--)
{
    ?>
    <tr>
        <?php
        for($j=$columnas;$j>=1;$j--)
        {
           echo "<td id='tds'>" . ($i*$j) . "</td>";
        }
        echo "<td id='tds2'>" . $i . "</td>";
        ?>
    </tr>
    <?php
}

for($j=$columnas; $j>=1;$j--) {
    ?>
    <td id="tds2"><?php echo $j; ?></td>
    <?php
}
    echo "<td id='tds2'></td>";
?>
</table>