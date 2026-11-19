<header class="topbar">
<div class="topbar-inner">
<a href="{{ route('home') }}" class="logo">Portal<span>Berita</span></a>
<nav class="nav">
<a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
@auth
<a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
<a href="{{ route('articles.index') }}" class="{{ request()->routeIs('articles.*') ? 'active' : '' }}">Artikel</a>
@endauth
</nav>
<div class="nav" style="margin-left:auto">
@auth
<span style="color:#E2E8F0;font-size:14px">Hi, <b style="color:#fff">{{ auth()->user()->name }}</b></span>
<form method="POST" action="{{ route('logout') }}" class="inline">@csrf<button class="btn btn-ghost btn-sm" style="background:#fff">Logout</button></form>
@endauth
@guest
<a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}">Login</a>
<a href="{{ route('register') }}" style="background:var(--gold);color:#1A2233;border-radius:999px">Register</a>
@endguest
</div>
</div>
</header>