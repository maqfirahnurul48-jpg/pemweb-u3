@extends('layouts.app')
@section('title',$article->title)
@section('content')
<div class="card" style="padding:0;overflow:hidden">
<img src="{{ $article->image_url }}" alt="Gambar untuk {{ $article->title }}" style="width:100%;max-height:380px;object-fit:cover">
<div style="padding:28px">
<p class="muted" style="margin:0">Dipublikasikan pada {{ $article->created_at->format('d M Y') }} oleh <b style="color:#0F2A44">{{ $article->user->name }}</b></p>
<h2 style="font-size:30px;margin:10px 0">{{ $article->title }}</h2>
<div style="font-size:16px;line-height:1.8">{!! nl2br(e($article->body)) !!}</div>
<hr style="border:0;border-top:1px solid #E5E7EB;margin:24px 0">
<div style="display:flex;gap:10px;flex-wrap:wrap">
<a href="{{ route('home') }}" class="btn btn-ghost">← Kembali ke Home</a>
<a href="{{ route('articles.index') }}" class="btn btn-ghost">Lihat Semua Artikel</a>
@auth @if($article->user_id === auth()->id())<a href="{{ route('articles.edit',$article) }}" class="btn btn-dark">Edit Artikel</a>@endif @endauth
</div>
</div>
</div>
@endsection