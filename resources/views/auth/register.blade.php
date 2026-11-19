@extends('layouts.app')
@section('title','Register')
@section('content')
<div class="card" style="max-width:440px;margin:30px auto;text-align:center">
<h2 style="margin:0">Buat Akun Baru</h2>
<p class="muted">Daftar untuk mulai menulis dan mengelola berita.</p>

@if($errors->any())
<div class="error" style="text-align:left">
@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach
</div>
@endif

<form method="POST" action="{{ route('register') }}" style="text-align:left">
@csrf

<label for="name">Nama Lengkap</label>
<input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Nama kamu">

<label for="email">Email</label>
<input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="nama@email.com">

<label for="password">Password</label>
<input type="password" id="password" name="password" required placeholder="Minimal 8 karakter">

<label for="password_confirmation">Konfirmasi Password</label>
<input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Ulangi password">

<button class="btn btn-dark" type="submit" style="width:100%;justify-content:center;margin-top:20px">Daftar Akun</button>
</form>

<p class="muted" style="margin-top:16px">Sudah punya akun? <a href="{{ route('login') }}"><b>Login di sini</b></a></p>
</div>
@endsection