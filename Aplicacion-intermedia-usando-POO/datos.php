<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de las Operaciones</title>
</head>
<body>
<?php
class Calculadora {
  private $numero1;
  private $numero2;

  public function __construct($numero1, $numero2) {
    $this->numero1 = $numero1;
    $this->numero2 = $numero2;
  }

  public function suma() {
    return $this->numero1 + $this->numero2;
  }

  public function resta() {
    return $this->numero1 - $this->numero2;
  }

  public function multiplicacion() {
    return $this->numero1 * $this->numero2;
  }

  public function division() {
    if ($this->numero2 != 0) {
      return $this->numero1 / $this->numero2;
    } else {
      return "No se puede dividir por cero";
    }
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $numero1 = $_POST['numero1'];
  $numero2 = $_POST['numero2'];

  // Crear objeto Calculadora
  $calculadora = new Calculadora($numero1, $numero2);

  // Mostrar resultados
  echo "<h2>A continuacion se muestran los Resultados de las operaciones:</h2>";
  echo "<div id='suma'>Resultado de la Suma: " . $calculadora->suma() . "</div>";
  echo "<div id='resta'>Resultado de la Resta: " . $calculadora->resta() . "</div>";
  echo "<div id='multiplicacion'>Resultado de la Multiplicación: " . $calculadora->multiplicacion() . "</div>";
  echo "<div id='division'>Resultado de la División: " . $calculadora->division() . "</div>";
}
?>
</body>
</html>