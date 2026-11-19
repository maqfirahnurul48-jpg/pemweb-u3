<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title','Portal Berita') - Portal Berita</title>
<style>
*{box-sizing:border-box}
:root{--navy:#0F2A44;--navy2:#1A3A5C;--gold:#F2A900;--bg:#F6F7F9;--card:#fff;--text:#1A2233;--muted:#6B7280;--border:#E5E7EB;--green:#E6F4EA;--red:#FDECEA}
body{font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,sans-serif;background:var(--bg);color:var(--text);margin:0;line-height:1.6}
a{color:var(--navy);text-decoration:none}
a:hover{text-decoration:underline}
.container{max-width:1080px;margin:0 auto;padding:0 20px 48px}
.topbar{background:var(--navy);color:#fff;position:sticky;top:0;z-index:10}
.topbar-inner{max-width:1080px;margin:0 auto;padding:0 20px;height:64px;display:flex;align-items:center;gap:24px}
.logo{font-weight:800;font-size:19px;color:#fff;letter-spacing:-.3px}
.logo span{color:var(--gold)}
.nav{display:flex;gap:6px;align-items:center;flex-wrap:wrap}
.nav a{color:#CBD5E1;padding:8px 12px;border-radius:999px;font-size:14px;font-weight:600}
.nav a:hover{color:#fff;text-decoration:none;background:rgba(255,255,255,.1)}
.nav a.active{color:#fff;background:var(--navy2)}
.nav .right{margin-left:auto;display:flex;gap:10px;align-items:center}
.btn{display:inline-flex;align-items:center;gap:6px;border:0;cursor:pointer;padding:10px 16px;border-radius:10px;font-weight:700;font-size:14px}
.btn-primary{background:var(--gold);color:#1A2233}
.btn-dark{background:var(--navy);color:#fff}
.btn-ghost{background:#fff;border:1px solid var(--border);color:var(--text)}
.btn-danger{background:#DC2626;color:#fff}
.btn-sm{padding:7px 12px;font-size:13px}
.card{background:var(--card);border:1px solid var(--border);border-radius:16px;padding:24px;box-shadow:0 2px 12px rgba(15,42,68,.06)}
.row{display:grid;gap:18px;grid-template-columns:repeat(auto-fit,minmax(280px,1fr))}
.muted{color:var(--muted)}
.flash{background:var(--green);border:1px solid #B7DFC3;padding:12px 14px;border-radius:10px;margin:14px 0;font-weight:600}
.error{background:var(--red);border:1px solid #F5C2BD;padding:12px 14px;border-radius:10px;margin:14px 0}
label{display:block;margin-top:16px;font-weight:700;font-size:14px}
input[type=text],input[type=url],input[type=email],input[type=password],textarea{width:100%;padding:12px 14px;border:1px solid var(--border);border-radius:10px;margin-top:6px;font:inherit;background:#FBFCFD}
input:focus,textarea:focus{outline:2px solid var(--navy);border-color:var(--navy)}
.pagination{display:flex;gap:6px;list-style:none;padding:0;flex-wrap:wrap}
.pagination a,.pagination span{display:block;padding:8px 12px;border:1px solid var(--border);border-radius:8px;background:#fff}
.pagination li.active span{background:var(--navy);color:#fff;border-color:var(--navy)}
.inline{display:inline}
.hero{background:var(--navy);color:#fff;border-radius:20px;padding:32px;margin:24px 0}
.hero h2{margin:0 0 8px;font-size:32px;line-height:1.2}
.hero p{color:#CBD5E1;margin:0 0 18px;max-width:640px}
.article-card{overflow:hidden;padding:0}
.article-card img{width:100%;height:180px;object-fit:cover;display:block}
.article-card .body{padding:18px}
.badge{display:inline-block;background:#FEF3C7;color:#92400E;padding:4px 10px;border-radius:999px;font-size:12px;font-weight:700}
.stat-num{font-size:36px;font-weight:800;margin:6px 0}
.footer{max-width:1080px;margin:0 auto;padding:20px;text-align:center;color:var(--muted);font-size:13px}
@media(max-width:640px){.topbar-inner{height:auto;padding:12px 16px;flex-wrap:wrap}.hero h2{font-size:26px}}
</style>
</head>
<body>
@include('partials.nav')
<main class="container">@yield('content')</main>
<div class="footer">Portal Berita • Praktikum Pemrograman Web • UIN Ar-Raniry</div>
</body>
</html>