{{-- login.blade.php --}}
@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="card" style="max-width:440px;margin:30px auto;text-align:center">
<h2 style="margin:0">Selamat Datang Kembali</h2><p class="muted">Login untuk mengelola berita kamu.</p>
@if($errors->any())<div class="error">@foreach($errors->all() as $e)<div>{{ $e }}</div>@endforeach</div>@endif
<form method="POST" action="{{ route('login') }}" style="text-align:left">@csrf
<label>Email</label><input type="email" name="email" value="{{ old('email') }}" required placeholder="nama@email.com">
<label>Password</label><input type="password" name="password" required placeholder="••••••••">
<button class="btn btn-dark" style="width:100%;justify-content:center;margin-top:20px">Login</button>
</form>
<p class="muted" style="margin-top:16px">Belum punya akun? <a href="{{ route('register') }}"><b>Daftar</b></a></p>
<p class="muted" style="font-size:12px">Akun uji: praktikan@example.com / password</p>
</div>
@endsection