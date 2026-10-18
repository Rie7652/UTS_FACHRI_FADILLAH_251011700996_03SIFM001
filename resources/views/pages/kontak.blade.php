```blade
@extends('layouts.app')

@section('title', 'Kontak - BOLD')

@section('content')
<div class="container py-5">

    <div class="panel p-4 p-md-5">
        <p class="text-neon fw-bold">INFORMASI PENGEMBANG</p>

        <h1 class="fw-bold mt-3">
            Kontak <span class="text-neon">BOLD</span>
        </h1>

        <p class="muted mt-4">
            Berikut informasi pengembang website
            Direktori Startup Lokal.
        </p>

        <div class="mt-4">
            <div class="mb-3">
                <span class="text-neon fw-bold">Nama</span>
                <p class="mb-0">Fachri Fadillah</p>
            </div>

            <div class="mb-3">
                <span class="text-neon fw-bold">NIM</span>
                <p class="mb-0">251011700996</p>
            </div>

            <div class="mb-3">
                <span class="text-neon fw-bold">Kelas</span>
                <p class="mb-0">03SIFM001</p>
            </div>

            <div class="mb-3">
                <span class="text-neon fw-bold">Proyek</span>
                <p class="mb-0">Direktori Startup Lokal</p>
            </div>
        </div>

        <a href="{{ route('beranda') }}"
           class="btn btn-outline-success mt-3">
            Kembali ke Beranda
        </a>
    </div>

</div>
@endsection