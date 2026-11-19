@extends('layouts.app')
@section('title','Articles')
@section('content')
<div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:12px">
<div><h2 style="margin:0">Daftar Artikel</h2><p class="muted" style="margin:4px 0 0">Kelola semua berita yang sudah terbit.</p></div>
<a href="{{ route('articles.create') }}" class="btn btn-dark">+ Artikel Baru</a>
</div>
@if(session('success'))<div class="flash">✓ {{ session('success') }}</div>@endif
@if($articles->isNotEmpty())
<div class="row" style="margin-top:18px">
@foreach($articles as $article)
<article class="card" style="padding:0;overflow:hidden">
<img src="{{ $article->image_url }}" style="width:100%;height:160px;object-fit:cover">
<div style="padding:18px">
<p class="muted" style="font-size:13px;margin:0">oleh {{ $article->user->name }} • {{ $article->created_at->format('d M Y') }}</p>
<h3 style="margin:8px 0"><a href="{{ route('articles.show',$article) }}">{{ $article->title }}</a></h3>
<p class="muted" style="font-size:14px">{{ \Illuminate\Support\Str::limit($article->body,100) }}</p>
<div style="display:flex;gap:8px;flex-wrap:wrap">
<a href="{{ route('articles.show',$article) }}" class="btn btn-ghost btn-sm">Lihat</a>
@if($article->user_id === auth()->id())
<a href="{{ route('articles.edit',$article) }}" class="btn btn-dark btn-sm">Edit</a>
<form action="{{ route('articles.destroy',$article) }}" method="POST" class="inline" onsubmit="return confirm('Hapus artikel ini?')">@csrf @method('DELETE')<button class="btn btn-danger btn-sm">Hapus</button></form>
@endif
</div>
</div>
</article>
@endforeach
</div>
<div style="margin-top:20px">{{ $articles->links('pagination::default') }}</div>
@else<div class="card" style="margin-top:18px"><p>Belum ada artikel.</p></div>@endif
@endsection