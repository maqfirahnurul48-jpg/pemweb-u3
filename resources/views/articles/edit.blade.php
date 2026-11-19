@extends('layouts.app')
@section('title','Edit Artikel')
@section('content')
<div class="card" style="max-width:720px;margin:0 auto">
<h2 style="margin:0">Edit Artikel</h2>
<p class="muted">Ubah judul, gambar, atau isi berita di bawah ini, lalu simpan perubahan.</p>

@if($errors->any())
<div class="error">
<strong>Terjadi kesalahan:</strong>
<ul style="margin:8px 0 0;padding-left:18px">
@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
</ul>
</div>
@endif

<form action="{{ route('articles.update', $article) }}" method="POST">
@csrf
@method('PUT')

<label for="title">Judul Artikel</label>
<input type="text" id="title" name="title" value="{{ old('title', $article->title) }}" required placeholder="Masukkan judul berita">

<label for="image">URL Gambar (opsional)</label>
<input type="url" id="image" name="image" value="{{ old('image', $article->image) }}" placeholder="https://example.com/gambar.jpg">

@if($article->image_url)
<div style="margin-top:12px">
<p class="muted" style="font-size:13px;margin:0 0 6px">Preview gambar saat ini:</p>
<img src="{{ $article->image_url }}" alt="Preview {{ $article->title }}" style="width:100%;max-width:400px;height:200px;object-fit:cover;border-radius:10px;border:1px solid #E5E7EB">
</div>
@endif

<label for="body">Isi Berita</label>
<textarea id="body" name="body" rows="8" required placeholder="Tulis isi berita di sini...">{{ old('body', $article->body) }}</textarea>

<div style="display:flex;gap:10px;margin-top:20px;flex-wrap:wrap">
<button class="btn btn-primary" type="submit">Update Artikel</button>
<a href="{{ route('articles.show', $article) }}" class="btn btn-ghost">Batal</a>
</div>
</form>
</div>
@endsection