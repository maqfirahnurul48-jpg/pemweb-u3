<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen py-10 px-4 text-slate-800 antialiased">
    <div class="max-w-xl mx-auto">

        <div class="bg-gradient-to-r from-teal-600 to-emerald-600 text-white rounded-t-2xl px-6 py-5 shadow-sm">
            <h1 class="text-xl font-bold tracking-tight">To-Do List Harian</h1>
            <p class="text-teal-100 text-xs mt-1">
                Kelola daftar tugas praktikum dengan rapi
            </p>
        </div>

        <div class="bg-white rounded-b-2xl shadow-sm border border-t-0 border-slate-200 p-6">
            @if (session('success'))
                <div class="mb-4 rounded-xl bg-emerald-50 border border-emerald-200 px-4 py-3 text-sm text-emerald-700 font-medium">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>