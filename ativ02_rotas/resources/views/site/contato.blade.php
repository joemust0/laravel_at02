<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contato</title>
</head>
<body class="bg-gray-100">

<main class="bg-blue-100 rounded-xl p-6 max-w-lg mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Contato</h1>

    <ul class="my-5 p-3 grid gap-3 text-left">
        <li><a href="/" class="text-blue-500 hover:underline">Home</a></li>
        <li><a href="/contato" class="text-blue-500 hover:underline">Contato</a></li>
        <li><a href="/sobrenos" class="text-blue-500 hover:underline">Sobre nós</a></li>
    </ul>    

    <p class="mb-6">Bem-vindo à página de contato</p>

    <form action="/contato" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf <!-- Token de segurança do Laravel -->
        <div class="mb-4">
            <label for="nome" class="block text-gray-700">Nome</label>
            <input type="text" id="nome" name="nome" class="w-full mt-1 p-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="telefone" class="block text-gray-700">Telefone</label>
            <input type="tel" id="telefone" name="telefone" class="w-full mt-1 p-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">E-mail</label>
            <input type="email" id="email" name="email" class="w-full mt-1 p-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="mensagem" class="block text-gray-700">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="4" class="w-full mt-1 p-2 border rounded-lg" required></textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Enviar</button>
        </div>
    </form>
</main>
</body>
</html>
