<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Subtração</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            600: '#7C3AED',
                            700: '#6D28D9',
                        }
                    }
                }
            }
        }
    </script>
    
</head>
<body class="bg-gradient-to-br from-gray-50 to-indigo-50 min-h-screen flex items-center justify-center p-4 font-sans">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl">
        <div class="bg-gradient-to-r from-primary-600 to-primary-700 p-6">
            <h1 class="text-2xl font-bold text-white">Calculadora de Subtração</h1>
            <p class="text-indigo-100 mt-1">Insira dois números para subtrair</p>
        </div>
        
        <div class="p-8">
            <form method="post" class="space-y-6">
                <div class="space-y-2">
                    <label for="num1" class="block text-sm font-medium text-gray-700">Primeiro Número</label>
                    <div class="relative">
                        <input type="number" name="num1" step="any" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent transition-all"
                               placeholder="Digite o primeiro número">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label for="num2" class="block text-sm font-medium text-gray-700">Segundo Número</label>
                    <div class="relative">
                        <input type="number" name="num2" step="any" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-600 focus:border-transparent transition-all"
                               placeholder="Digite o segundo número">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <button type="submit" 
                        class="w-full flex justify-center items-center px-6 py-3 bg-gradient-to-r from-primary-600 to-primary-700 text-white font-semibold rounded-lg hover:from-primary-700 hover:to-primary-800 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all transform hover:scale-[1.02] shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    Calcular Subtração
                </button>
            </form>
            
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $subtracao = $num1 - $num2;
                
                echo '
                <div class="mt-8 p-6 bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl border border-indigo-100 animate-fade-in">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Resultado da Subtração</h3>
                    <div class="flex items-baseline space-x-2">
                        <span class="text-4xl font-bold text-primary-700">'.htmlspecialchars($subtracao, ENT_QUOTES, 'UTF-8').'</span>
                        <span class="text-gray-500">= '.htmlspecialchars($num1, ENT_QUOTES, 'UTF-8').' - '.htmlspecialchars($num2, ENT_QUOTES, 'UTF-8').'</span>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</body>
</html>