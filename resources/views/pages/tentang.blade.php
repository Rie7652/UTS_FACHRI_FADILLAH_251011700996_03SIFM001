@extends('layouts.app')

@section('title', 'Tentang - BOLD')

@section('content')
<div class="container py-5">

    <div class="panel p-4 p-md-5">
        <p class="text-neon fw-bold">TENTANG KAMI</p>

        <h1 class="fw-bold mt-3">
            Tentang <span class="text-neon">Website BOLD</span>
        </h1>

        <p class="muted mt-4">
            BOLD merupakan website Direktori Startup Lokal
            yang menyediakan informasi mengenai perusahaan
            rintisan di Indonesia.
        </p>

        <p class="muted">
            Informasi yang ditampilkan meliputi nama startup,
            bidang industri, pendiri, logo, website resmi,
            dan deskripsi startup.
        </p>

        <p class="muted">
            Website ini dikembangkan menggunakan Laravel,
            Blade, Bootstrap lokal, dan database MySQL.
            Tujuannya adalah menyajikan informasi startup
            dalam tampilan yang sederhana dan mudah dipahami.
        </p>

        <a href="{{ route('startups.index') }}"
           class="btn btn-neon mt-3">
            Jelajahi Startup &rarr;
        </a>
    </div>

</div>
@endsection
```