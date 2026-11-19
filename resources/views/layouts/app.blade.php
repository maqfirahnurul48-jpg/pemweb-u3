<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Portal Berita') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    <style>
        body { background: #EFF6FF !important; font-family: 'Figtree', sans-serif !important; margin: 0; }
        .my-nav { background: #1D4ED8 !important; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 4px 20px rgba(29,78,216,0.3); }
        .my-nav a { color: white !important; text-decoration: none; font-weight: 700; margin-left: 20px; }
        .my-nav .logo { font-size: 22px; font-weight: 800; }
        header { background: white !important; border-bottom: 3px solid #BFDBFE !important; padding: 20px; }
        header h2 { color: #1E3A8A !important; font-weight: 800 !important; margin: 0; }
        h1, h2, h3 { color: #1E3A8A !important; }
        a { color: #2563EB !important; }
        button { background: #2563EB !important; color: white !important; border-radius: 999px !important; border: none !important; padding: 10px 20px; cursor: pointer; }
        button:hover { background: #1D4ED8 !important; }
        .content-box { background: white !important; border: 2px solid #BFDBFE !important; border-radius: 20px !important; padding: 24px; margin: 24px auto; max-width: 1100px; }
        input, textarea, select { border-radius: 12px !important; border: 2px solid #BFDBFE !important; padding: 10px; width: 100%; }
        footer { background: #1D4ED8 !important; color: white !important; text-align: center; padding: 20px; margin-top: 40px; }
        footer p { color: white !important; margin: 4px; }
    </style>
</head>
<body>
    <div class="min-h-screen">
        <nav class="my-nav">
            <a href="/" class="logo">Portal Berita</a>
            <div>
                <a href="/">Beranda</a>
                <a href="/dashboard">Dashboard</a>
                <a href="/login">Login</a>
            </div>
        </nav>

        @isset($header)
            <header>
                {{ $header }}
            </header>
        @endisset

        <main>
            <div class="content-box">
                {{ $slot ?? '' }}
                @yield('content')
            </div>
        </main>

        <footer>
            <p style="font-weight:700; font-size:18px;">Portal Berita</p>
            <p style="font-size:14px;">Berita Terbaru, Cepat & Terpercaya - Biru Putih</p>
            <p style="font-size:12px; opacity:0.8;">© 2026 Portal Berita. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>