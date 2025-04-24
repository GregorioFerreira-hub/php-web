<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Soma de Dois Números</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Calculadora de Soma</h2>
    
    <form method="post">
        
        Primeiro número: 
        <input type="number" name="num1" step="any" required><br><br>
        
        Segundo número: 
        <input type="number" name="num2" step="any" required><br><br>
        
        <input type="submit" value="Calcular Soma">
        
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            // Recebe os valores do formulário
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
             // Calcula a soma
            $soma = $num1 + $num2;
            // Exibe o resultado
            echo "<h3>Resultado: $num1 + $num2 = $soma</h3>";
        }
    ?>
</body>
</html>
