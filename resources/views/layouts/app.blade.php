<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'BOLD - Direktori Startup Lokal')</title>

    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <style>
        :root {
            --bg: #050907;
            --panel: #0b1510;
            --green: #39ff88;
            --muted: #91a99a;
            --border: #1c4930;
        }

        * {
            box-sizing: border-box;
        }

        html {
            min-height: 100%;
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            background-color: var(--bg);
            color: #e8f5ec;
            font-family: Consolas, "Courier New", monospace;
        }

        main {
            flex: 1 0 auto;
            padding-top: 28px;
            padding-bottom: 40px;
        }

        .navbar {
            background-color: #080e0a;
            border-bottom: 1px solid var(--border);
        }

        .navbar-brand {
            color: var(--green) !important;
            font-size: 1.5rem;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .navbar .nav-link {
            color: var(--muted);
            transition: color 0.2s ease;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link:focus {
            color: var(--green);
        }

        .navbar-toggler {
            border-color: var(--border);
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.15rem rgba(57, 255, 136, 0.2);
        }

        .hero {
            padding: 55px 0;
        }

        .hero h1 {
            line-height: 1.2;
        }

        .text-neon {
            color: var(--green) !important;
        }

        .terminal-label {
            color: var(--green);
            font-size: 0.85rem;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .muted {
            color: var(--muted);
        }

        .panel {
            background-color: var(--panel);
            border: 1px solid var(--border);
            border-radius: 12px;
        }

        .startup-card {
            height: 100%;
            background-color: var(--panel);
            border: 1px solid var(--border);
            border-radius: 12px;
            color: #e8f5ec;
            transition: border-color 0.2s ease,
                        transform 0.2s ease;
        }

        .startup-card:hover {
            border-color: var(--green);
            transform: translateY(-3px);
        }

        .startup-logo {
            width: 70px;
            height: 70px;
            object-fit: contain;
            padding: 8px;
            background-color: #ffffff;
            border-radius: 10px;
        }

        .btn-neon {
            color: #041109;
            background-color: var(--green);
            border: 1px solid var(--green);
            font-weight: 700;
        }

        .btn-neon:hover {
            color: var(--green);
            background-color: transparent;
            border-color: var(--green);
        }

        .btn-outline-success {
            color: var(--green);
            border-color: var(--green);
        }

        .btn-outline-success:hover {
            color: #041109;
            background-color: var(--green);
            border-color: var(--green);
        }

        .btn:disabled {
            opacity: 0.45;
        }

        a {
            text-decoration: none;
        }

        .form-control,
        .form-select {
            color: #e8f5ec;
            background-color: var(--panel);
            border-color: var(--border);
        }

        .form-control:focus,
        .form-select:focus {
            color: #e8f5ec;
            background-color: var(--panel);
            border-color: var(--green);
            box-shadow: 0 0 0 0.15rem rgba(57, 255, 136, 0.15);
        }

        footer {
            flex-shrink: 0;
            width: 100%;
            padding: 18px 0;
            background-color: #080e0a;
            border-top: 1px solid var(--border);
            color: var(--muted);
            text-align: center;
        }

        @media (max-width: 576px) {
            .hero {
                padding: 35px 0;
            }

            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>

    @stack('styles')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}">
                BOLD
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka navigasi"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('beranda') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('startups.index') }}">
                            Daftar Startup
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">
                            Tentang
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kontak') }}">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p class="mb-1">
                <strong class="text-neon">BOLD</strong>
                - Direktori Startup Lokal
            </p>
            <small>
                Fachri Fadillah | 251011700996 | 03SIFM001
            </small>
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @stack('scripts')
</body>
</html>