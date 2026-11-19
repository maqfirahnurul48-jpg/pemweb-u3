@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<div class="card" style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px">
<div><h2 style="margin:0">Halo, {{ $user->name }} 👋</h2><p class="muted" style="margin:6px 0 0">Ini ringkasan aktivitas artikel kamu hari ini.</p></div>
<a href="{{ route('articles.create') }}" class="btn btn-primary">+ Tambah Artikel</a>
</div>

<div class="row" style="margin-top:18px">
<div class="card"><p class="muted" style="margin:0;font-weight:700">TOTAL ARTIKEL</p><p class="stat-num">{{ $totalArticles }}</p><p class="muted" style="margin:0">Jumlah seluruh artikel di sistem.</p></div>
<div class="card"><p class="muted" style="margin:0;font-weight:700">ARTIKEL KAMU</p><p class="stat-num" style="color:#D97706">{{ $myArticles }}</p><p class="muted" style="margin:0">Artikel yang dibuat oleh akun kamu.</p></div>
<div class="card"><p style="margin:0;font-weight:700">AKSI CEPAT</p><ul style="padding-left:18px"><li><a href="{{ route('articles.create') }}">+ Tambah Artikel Baru</a></li><li><a href="{{ route('articles.index') }}">Lihat Semua Artikel</a></li><li><a href="{{ route('home') }}">Lihat Halaman Home</a></li></ul></div>
</div>

<div class="card" style="margin-top:18px">
<h3 style="margin-top:0">Artikel Terbaru</h3>
@if($latestArticles->isNotEmpty())
<div class="row">
@foreach($latestArticles as $article)
<article class="card" style="padding:0;overflow:hidden;display:flex;gap:14px;align-items:center">
<img src="{{ $article->image_url }}" style="width:110px;height:90px;object-fit:cover;border-radius:12px 0 0 12px">
<div style="padding:10px 10px 10px 0"><h4 style="margin:0"><a href="{{ route('articles.show',$article) }}">{{ $article->title }}</a></h4><p class="muted" style="margin:4px 0;font-size:13px">oleh {{ $article->user->name }} • {{ $article->created_at->format('d M Y') }}</p><p style="margin:0;font-size:14px">{{ \Illuminate\Support\Str::limit($article->body,90) }}</p></div>
</article>
@endforeach
</div>
@else<p class="muted">Belum ada artikel yang bisa ditampilkan.</p>@endif
</div>

<div class="card" style="margin-top:18px"><h3 style="margin-top:0">Info Akun</h3><p><b>Nama:</b> {{ $user->name }}<br><b>Email:</b> {{ $user->email }}</p></div>
@endsection