<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Verificador Par ou Ímpar</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Verificador de Número Par ou Ímpar</h2>
    <form method="post">
        
        Digite um número: 
        <input type="number" name="numero" required><br><br>
        
        <input type="submit" value="Verificar">
        
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $numero = $_POST['numero'];
            if ($numero % 2 == 0) 
            {
                echo "<h3>O número $numero é PAR</h3>";
            } 
            else 
            {
                echo "<h3>O número $numero é ÍMPAR</h3>";
            }
        }
    ?>
</body>
</html>
