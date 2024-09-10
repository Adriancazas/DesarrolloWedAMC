<?php
session_start();
?>
<form action="guardar.php" method="post">
    <label>Valor A</label>
    <input type="number" name="a" required><br>
    <label>Valor B</label>
    <input type="number" name="b" required><br>
    <label>Valor C</label>
    <input type="number" name="c" required><br>
    <input type="submit" value="Guardar">
</form>
