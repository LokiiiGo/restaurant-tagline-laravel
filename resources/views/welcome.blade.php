<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Restaurant Tagline - Início</title>
    <link rel="shortcut icon" href="{{ asset('image/comidaTagline.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-yellow-500 p-4 montserrat md:p-5 flex flex-col min-h-screen">
    <header class="bg-white p-4 md:p-5 mb-5 text-2xl md:text-3xl text-gray-800 text-center  rounded">Restaurant
        Tagline - Uma gastronomia inovadora</header>

    <main class="bg-white p-4 md:p-5 mb-5 flex justify-center flex-grow rounded">
        <div class="text-center w-full">
            <img src="{{ asset('image/restaurantTagline.png') }}" alt="restaurant tagline" class="mx-auto mb-5" />
            <p class="text-lg md:text-2xl font-semibold text-gray-800 mb-4">Somos uma equipe apaixonada por gastronomia
                brasileira em busca de excelência culinária.</p>
            <p class="text-lg md:text-2xl font-semibold text-gray-800 mb-10">Faça o seu cadastro para ter acesso ao
                menu.</p>
            <a href="{{ route('register') }}"
                class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 md:px-4 rounded inline-block">Cadastre-se</a>
        </div>
    </main>

    <footer class="bg-[#232323] p-4 md:p-5 rounded">
        <p class="text-center text-white text-sm md:text-base">&copy; Restaurant Tagline</p>
    </footer>
</body>

</html>
