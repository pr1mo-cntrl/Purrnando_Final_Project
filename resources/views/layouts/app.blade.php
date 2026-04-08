<!DOCTYPE html>
<html>
<head>
    <title>Purrnando Adoption</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <header class="bg-orange-500 p-4 text-white font-bold text-2xl">Purrnando</header>
    <main class="p-6 flex-grow">
        @yield('content')
    </main>
    <footer class="bg-gray-800 p-4 text-white text-center mt-10">© 2026 Purrnando</footer>
</body>
</html>