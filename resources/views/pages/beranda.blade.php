@extends('layouts.app')

@section('title', 'Beranda - BOLD')

@section('content')
<div class="container">

    <section class="hero">
        <p class="text-neon fw-bold">DIREKTORI STARTUP LOKAL</p>

        <h1 class="display-4 fw-bold mt-3">
            Temukan Startup
            <span class="text-neon">Masa Depan.</span>
        </h1>

        <p class="muted col-lg-8 mt-3">
            Kenali startup lokal Indonesia, jelajahi berbagai bidang
            industri, dan temukan inovasi yang dikembangkan oleh
            para pendiri startup.
        </p>

        <a href="{{ route('startups.index') }}" class="btn btn-neon mt-3">
            Jelajahi Startup &rarr;
        </a>
    </section>

    <section class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="panel p-4 h-100">
                <h3 class="text-neon">Daftar Startup</h3>

                <p class="muted mt-3">
                    Lihat informasi startup, bidang industri,
                    nama pendiri, logo, dan website resmi.
                </p>

                <a href="{{ route('startups.index') }}"
                   class="btn btn-outline-success mt-2">
                    Lihat Daftar
                </a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel p-4 h-100">
                <h3 class="text-neon">Tentang Kami</h3>

                <p class="muted mt-3">
                    Kenali lebih lanjut tentang website direktori
                    startup lokal dan tujuan pembuatannya.
                </p>

                <a href="{{ route('tentang') }}"
                   class="btn btn-outline-success mt-2">
                    Tentang Kami
                </a>
            </div>
        </div>
    </section>

</div>
@endsection