<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - CVHub Career</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Inter', sans-serif; background: #121212; color: #ffffff; -webkit-font-smoothing: antialiased; min-height: 100vh; display: flex; align-items: center; justify-content: center; }
        input:focus { outline: none; border-color: #ffffff !important; box-shadow: 0 0 0 1px #ffffff; }
    </style>
</head>
<body>
    <div style="width: 100%; max-width: 480px; padding: 0 24px;">
        {{-- Logo --}}
        <div style="text-align: center; margin-bottom: 40px;">
            <h1 style="font-size: 24px; font-weight: 700; color: #ffffff; letter-spacing: -0.02em;">CVHub<span style="color: #1ed760;">Career</span></h1>
            <p style="margin-top: 8px; font-size: 14px; color: #b3b3b3;">Masuk ke Dashboard Admin</p>
        </div>

        {{-- Form Card --}}
        <div style="background: #181818; border-radius: 20px; padding: 40px; box-shadow: rgba(0,0,0,0.5) 0px 8px 24px;">
            @if(session('success'))
                <div style="margin-bottom: 20px; padding: 12px 16px; background: rgba(30,215,96,0.1); border: 1px solid rgba(30,215,96,0.2); border-radius: 8px; font-size: 13px; color: #1ed760;">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div style="margin-bottom: 20px; padding: 12px 16px; background: rgba(243,114,127,0.1); border: 1px solid rgba(243,114,127,0.2); border-radius: 8px; font-size: 13px; color: #f3727f;">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 12px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.4px;">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        style="width: 100%; padding: 12px 16px; background: #1f1f1f; border: 1px solid #7c7c7c; border-radius: 6px; color: #ffffff; font-size: 14px; font-family: inherit; transition: all 0.15s ease;" placeholder="admin@cvhub.com">
                </div>
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-size: 12px; font-weight: 700; color: #b3b3b3; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 1.4px;">Password</label>
                    <input type="password" name="password" required
                        style="width: 100%; padding: 12px 16px; background: #1f1f1f; border: 1px solid #7c7c7c; border-radius: 6px; color: #ffffff; font-size: 14px; font-family: inherit; transition: all 0.15s ease;" placeholder="Masukkan password">
                </div>
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 24px;">
                    <input type="checkbox" name="remember" id="remember" style="width: 16px; height: 16px; accent-color: #1ed760;">
                    <label for="remember" style="font-size: 13px; color: #b3b3b3;">Ingat saya</label>
                </div>
                <button type="submit" style="width: 100%; padding: 14px; background: #1ed760; color: #000000; border: none; border-radius: 9999px; font-size: 14px; font-weight: 700; font-family: inherit; cursor: pointer; text-transform: uppercase; letter-spacing: 1.4px; transition: all 0.15s ease;" onmouseover="this.style.transform='scale(1.02)';this.style.background='#1fdf64'" onmouseout="this.style.transform='';this.style.background='#1ed760'">
                    Masuk
                </button>
            </form>
        </div>

        {{-- Footer --}}
        <div style="margin-top: 32px; text-align: center;">
            <p style="font-size: 13px; color: #b3b3b3;">
                Belum punya akun?
                <a href="{{ route('admin.register') }}" style="color: #ffffff; font-weight: 700; text-decoration: none;" onmouseover="this.style.color='#1ed760'" onmouseout="this.style.color='#ffffff'">Daftar</a>
            </p>
            <a href="/" style="display: inline-flex; align-items: center; gap: 6px; margin-top: 16px; font-size: 13px; color: #7c7c7c; text-decoration: none; transition: color 0.15s ease;" onmouseover="this.style.color='#b3b3b3'" onmouseout="this.style.color='#7c7c7c'">
                <svg style="width: 14px; height: 14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                Kembali ke Beranda
            </a>
        </div>
    </div>
</body>
</html>
