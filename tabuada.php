<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Gerador de Tabuada</title>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; margin-top: 20px; }
        td, th { border: 1px solid #ddd; padding: 8px; text-align: center; }
    </style>
</head>
<body>
    <h2>Gerador de Tabuada</h2>
    <form method="post">
        Digite um número: 
        <input type="number" name="numero" required>
        
        <input type="submit" value="Gerar Tabuada">
        
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $numero = $_POST['numero'];
            echo "<h3>Tabuada do $numero</h3>";
            
            echo "<table>";
            echo "<tr><th>Operação</th><th>Resultado</th></tr>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero × $i</td><td>= $resultado</td></tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>
