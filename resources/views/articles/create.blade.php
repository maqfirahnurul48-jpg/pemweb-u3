@extends('layouts.app')
@section('title','Tambah Artikel')
@section('content')
<div class="card" style="max-width:720px;margin:0 auto">
<h2 style="margin:0">Tambah Artikel / Berita</h2>
<p class="muted">Isi formulir di bawah. Gambar memakai URL (opsional); jika kosong, sistem memakai placeholder.</p>
@if($errors->any())<div class="error"><strong>Terjadi kesalahan:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form action="{{ route('articles.store') }}" method="POST">@csrf
<label for="title">Judul Artikel</label><input type="text" id="title" name="title" value="{{ old('title') }}" required placeholder="Masukkan judul berita">
<label for="image">URL Gambar (opsional)</label><input type="url" id="image" name="image" value="{{ old('image') }}" placeholder="https://example.com/gambar.jpg">
<label for="body">Isi Berita</label><textarea id="body" name="body" rows="8" required placeholder="Tulis isi berita di sini...">{{ old('body') }}</textarea>
<div style="display:flex;gap:10px;margin-top:20px"><button class="btn btn-primary" type="submit">Simpan Artikel</button><a href="{{ route('articles.index') }}" class="btn btn-ghost">Batal</a></div>
</form></div>
@endsection