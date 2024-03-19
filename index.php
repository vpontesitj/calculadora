<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculadora Básica</title>

</head>
<body>
<div class="calculator">
<form action="" method="post">
<input type="text" name="num1" placeholder="Número 1" required><br>
<input type="text" name="num2" placeholder="Número 2" required><br>
<input type="submit" name="op" value="+">
<input type="submit" name="op" value="-">
<input type="submit" name="op" value="*">
<input type="submit" name="op" value="/">
</form>
<?php
            if(isset($_POST['op'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $op = $_POST['op'];
                switch ($op) {
                    case '+':
                        $resultado = $num1 + $num2;
                        break;
                    case '-':
                        $resultado = $num1 - $num2;
                        break;
                    case '*':
                        $resultado = $num1 * $num2;
                        break;
                    case '/':
                        if ($num2 != 0) {
                            $resultado = $num1 / $num2;
                        } else {
                            echo '<p class="error">Erro: Divisão por zero!</p>';
                        }
                        break;
                }
                if(isset($resultado)) {
                    echo '<p>Resultado: ' . $resultado . '</p>';
                }
            }
        ?>
</div>
</body>
</html>