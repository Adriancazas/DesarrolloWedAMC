<?php
session_start();

class Operaciones {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calcularSuma() {
        return $this->a + $this->b + $this->c;
    }

    public function calcularMayor() {
        if($this->a >= $this->b && $this->a >= $this->c) {
            return $this->a;
        } elseif($this->b >= $this->a && $this->b >= $this->c) {
            return $this->b;
        } else {
            return $this->c;
        }
    }

    public function mostrarCalculos() {
        ?>
        <table border="1" style="border-collapse: collapse; width: 50%; text-align: center;">
            <tr style='background-color: red;'><th>Valor A</th><th>Valor B</th><th>Valor C</th></tr>
            <tr><td><?php echo $this->a; ?></td><td><?php echo $this->b; ?></td><td><?php echo $this->c; ?></td></tr>
            <tr><th colspan="2" style='background-color: red;'>Suma</th><th><?php echo $this->calcularSuma(); ?></th></tr>
            <tr><th colspan="2" style='background-color: red;'>Mayor</th><th><?php echo $this->calcularMayor(); ?></th></tr>
        </table>
        <?php
    }
}

$operacion = new Operaciones($_SESSION['a'], $_SESSION['b'], $_SESSION['c']);
?>

<h2>Mostrar Calculos</h2>

<?php
$operacion->mostrarCalculos();
?>
