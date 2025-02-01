<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        @keyframes colorChange {
            0% { color: red; }
            25% { color: #dddd02; }
            50% { color: #0072fd; }
            75% { color: #00bd00; }
            100% { color: red; }
        }
        .google-icon {
            animation: colorChange 4s infinite;
            transition: color 0.8s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="w-full max-w-md bg-white p-8 shadow-lg rounded-2xl">
    <h2 class="text-3xl font-semibold text-center text-gray-700 mb-8">Login</h2>

    <form action="" class="space-y-4">
        <div>
            <label for="usuario" class="block text-gray-600 font-medium">Usuário</label>
            <input type="text" id="usuario" name="usuario"
                   class="w-full mt-1 px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <div>
            <label for="senha" class="block text-gray-600 font-medium">Senha</label>
            <input type="password" id="senha" name="senha"
                   class="w-full mt-1 px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <button type="submit"
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition font-semibold">
            Entrar
        </button>
    </form>

    <div class="mt-8 border-t pt-4">
        <p class="text-center text-gray-600">Ou faça login com:</p>
        <div class="mt-4 flex flex-col gap-2">
            <a href="/auth/github/redirect"
               class="flex items-center justify-center bg-white text-black py-2 px-4 border rounded-md hover:bg-gray-100 transition">
                <i class="fab fa-github mr-2 text-black"></i> Login com GitHub
            </a>

            <a href="/auth/google/redirect"
               class="flex items-center justify-center bg-white text-black py-2 px-4 border rounded-md hover:bg-gray-100 transition">
                <i class="fab fa-google mr-2 google-icon"></i> Login com Google
            </a>
        </div>
    </div>
</div>
</body>
</html>
