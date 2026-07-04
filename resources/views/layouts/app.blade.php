<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Papan Pesan')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen">
    <nav class="bg-white shadow">
        <div class="max-w-2xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('messages.index') }}" class="font-bold text-lg">Papan Pesan</a>
            <a href="{{ route('about') }}" class="text-sm text-gray-600 hover:text-gray-900">Tentang</a>
        </div>
    </nav>
    <main class="max-w-2xl mx-auto px-4 py-8">
        @yield('content')
    </main>
</body>
</html>