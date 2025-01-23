<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="w-full max-w-md bg-white p-8 shadow-md rounded-md">
    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Login</h2>

    @livewire('login-form')

    <div class="mt-6 border-t pt-4">
        <p class="text-center text-gray-600">Ou faça login com:</p>
        <div class="mt-4 flex flex-col gap-2">
            <a href="/auth/github/redirect"
               class="flex items-center justify-center bg-gray-800 text-white py-2 px-4 rounded-md hover:bg-gray-700 transition">
                Login com GitHub
            </a>

            <a href="/auth/google/redirect"
               class="flex items-center justify-center bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition">
                Login com Google
            </a>
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
