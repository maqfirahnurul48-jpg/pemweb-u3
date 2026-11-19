@extends('layouts.app')
@section('title','Home')
@section('content')
<section class="hero">
<span class="badge">✦ PORTAL BERITA TERPERCAYA</span>
<h2 style="margin-top:14px">Berita Terbaru,<br>Ditulis Oleh Kamu.</h2>
<p>Selamat datang di portal berita berbasis Laravel. Semua berita di bawah ini diambil dari tabel <code>articles</code> dan bisa dikelola setelah login.</p>
@guest
<a href="{{ route('login') }}" class="btn btn-primary">Login untuk Menulis →</a>
<a href="{{ route('register') }}" class="btn" style="background:#fff;color:#0F2A44;margin-left:8px">Buat Akun Gratis</a>
@endguest
@auth
<a href="{{ route('articles.create') }}" class="btn btn-primary">+ Tulis Berita Baru</a>
<a href="{{ route('dashboard') }}" class="btn" style="background:#fff;color:#0F2A44;margin-left:8px">Ke Dashboard</a>
@endauth
</section>

<h3 style="font-size:22px">Berita Terbaru</h3>
@if($articles->isNotEmpty())
<div class="row">
@foreach($articles as $article)
<article class="card article-card">
<img src="{{ $article->image_url }}" alt="Gambar {{ $article->title }}">
<div class="body">
<p class="muted" style="font-size:13px;margin:0">{{ $article->created_at->format('d M Y') }} • oleh {{ $article->user->name }}</p>
<h4 style="margin:8px 0"><a href="{{ route('articles.show',$article) }}">{{ $article->title }}</a></h4>
<p class="muted" style="font-size:14px">{{ \Illuminate\Support\Str::limit($article->body,140) }}</p>
<a href="{{ route('articles.show',$article) }}" style="font-weight:700">Baca Selengkapnya →</a>
</div>
</article>
@endforeach
</div>
@else
<div class="card"><p class="muted">Belum ada berita. @auth <a href="{{ route('articles.create') }}">Buat yang pertama yuk.</a> @endauth</p></div>
@endif
@endsection