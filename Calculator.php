<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculator</h2>
    <form method= "post" action="Practice.php">
        <input type="number" name="num1" placeholder="Number 1">
        <input type="number" name="num2" placeholder="Number 2">
        <select name="operation">

            <option value="Addition">Addition</option>
            <option value="Subtraction">Subtraction</option>
            <option value="Division">Division</option>
            <option value="Multiplication">Multiplication</option>
        </select>

        <button type="Submit">Calcular</button>
    </form>
    
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'Addition':
            $results = $num1 + $num2;

            break;
        case 'Subtraction':
            $results = $num - $num2;
            break;
        case 'Multiplication':
            $results = $num * $num2;
            break;
            case 'Division':
            if ($num2 != 0) {
                $results = $num / $num2;}
        else {$results = "Don't can divide Zero";
             }
            break;
        }

echo "<p> The Results is: $results </p>";
    }
    ?>
</body>
</html>
