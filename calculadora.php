<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op   = $_POST['operacion'];
$resultado = null;
$error = "";

if (!is_numeric($num1) || !is_numeric($num2)) {
    $error = "Por favor, introduce números válidos.";
} else {
    switch ($op) {
        case 'suma':           $resultado = $num1 + $num2; break;
        case 'resta':          $resultado = $num1 - $num2; break;
        case 'multiplicacion': $resultado = $num1 * $num2; break;
        case 'division':
            if ($num2 == 0) $error = "No se puede dividir entre cero.";
            else $resultado = $num1 / $num2;
            break;
    }
}
?>
<!DOCTYPE html>
<html><head><link rel="stylesheet" href="style.css"></head>
<body><div class="calculadora">
  <?php if ($error): ?>
    <p style="color:red"><?= $error ?></p>
  <?php else: ?>
    <h2>Resultado: <?= htmlspecialchars($resultado) ?></h2>
  <?php endif; ?>
  <a href="index.html">← Volver</a>
</div></body></html>