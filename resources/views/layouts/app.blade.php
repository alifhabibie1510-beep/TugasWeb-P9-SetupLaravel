<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Tugas Rutin 9</title>

    {{-- Bonus: styling dengan Tailwind CSS via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">

    <header class="border-b border-slate-800">
        <nav class="mx-auto flex max-w-5xl flex-wrap items-center justify-between gap-4 px-6 py-4">
            <a href="{{ route('home') }}" class="text-lg font-bold text-red-500">
                Laravel<span class="text-white">Setup</span>
            </a>
            <ul class="flex flex-wrap gap-5 text-sm font-medium">
                <li>
                    <a href="{{ route('home') }}"
                       class="{{ request()->routeIs('home') ? 'text-white' : 'text-slate-400 hover:text-white' }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                       class="{{ request()->routeIs('about') ? 'text-white' : 'text-slate-400 hover:text-white' }}">About</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                       class="{{ request()->routeIs('contact') ? 'text-white' : 'text-slate-400 hover:text-white' }}">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-5xl px-6 py-12">
        @yield('content')
    </main>

    <footer class="border-t border-slate-800 py-6 text-center text-sm text-slate-500">
        &copy; 2026 Muhammad Alif Habibie. Tugas Rutin 9, Pemrograman Web, UNIMED.
    </footer>

</body>
</html>