<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method= "post" action="">
        <input type="number" name="num1" placeholder="Number 1">
        <input type="number" name="num2" placeholder="Number 2">
        <select name="Math Operation">

            <option value="Addition">Addition</option>
            <option value="Subtraction">Subtraction</option>
            <option value="Division">Division</option>
            <option value="Multiplication">Multiplication</option>
        </select>

        <button type="Submit">Calculando</button>
    </form>
    
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
    echo "<h1>Primer Calculo</h1>";
    // Un poco de matemáticas básicas
    $numero1 = 10;
    $numero2 = 5;
    $suma = $numero1 + $numero2;
    echo "<p>La suma de $numero1 y $numero2 es: $suma</p>";
    ?>
</body>
</html>
