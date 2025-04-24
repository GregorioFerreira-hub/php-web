<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtração de Dois Números</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-4">
    <div class="p-8">
        <h1 class="text-2xl font-bold text-gray-800">Subtrair Dois Números</h1>
    
    <form method="post">
        <label for="quantity1" class="block text-sm font-medium text-gray-700 mb-1"> Primeiro Número:</label>
       
        <input type="number" name="num1" step="any" required
               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <label for="quantity1" class="block text-sm font-medium text-gray-700 mb-1"> Segundo Número:</label>
       
        <input type="number" name="num2" step="any" required
               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <input type="submit" value="Subtrair"
               class="cursor-pointer px-6 py-3 bg-gray-100 text-gray-700 font-medium rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors">
        </form>
        </div>
   
    
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            //Recebe os valores do formulario
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            
            //calcular a subtração
            $subtracao=$num1-$num2;
            //Exibe o resultado
            echo "<h3 class=\"p-8 text-2xl font-bold text-gray-800\">Resultado: $num1-$num2 = $subtracao</h3>";
        }
    ?>
     </div>
</body>   
</html>