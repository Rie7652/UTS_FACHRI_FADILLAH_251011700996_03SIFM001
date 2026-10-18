@extends('layouts.app')

@section('title', 'Daftar Startup - BOLD')

@section('content')
<div class="container">

    <section class="hero">
        <p class="text-neon fw-bold">DIREKTORI STARTUP LOKAL</p>

        <h1 class="display-4 fw-bold mt-3">
            Daftar <span class="text-neon">Startup.</span>
        </h1>

        <p class="muted col-lg-8 mt-3">
            Jelajahi startup lokal beserta informasi
            industri dan pendirinya.
        </p>
    </section>

    <section class="row g-3 mb-5">
        <div class="col-6 col-md-4">
            <div class="panel p-3 h-100">
                <div class="muted small">TOTAL STARTUP</div>
                <div class="display-6 fw-bold text-neon">
                    {{ $startups->total() }}
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4">
            <div class="panel p-3 h-100">
                <div class="muted small">JUMLAH INDUSTRI</div>
                <div class="display-6 fw-bold text-neon">
                    {{ \App\Models\Startup::distinct()->count('industry') }}
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel p-3 h-100">
                <div class="muted small">STATUS DATABASE</div>
                <div class="fs-4 fw-bold text-neon mt-2">
                    Terhubung
                </div>
            </div>
        </div>
    </section>

    <section id="directory" class="pb-4">
        <div class="mb-4">
            <h2 class="fw-bold">Koleksi Startup</h2>
            <p class="muted">
                Pilih startup untuk melihat informasi lengkapnya.
            </p>
        </div>

        <div class="row g-4">
            @forelse ($startups as $startup)
                <div class="col-12 col-sm-6">
                    <div class="startup-card p-3 d-flex flex-column">

                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img
                                src="{{ asset('assets/images/' . $startup->logo) }}"
                                alt="Logo {{ $startup->name }}"
                                class="startup-logo"
                                onerror="this.style.display='none'"
                            >

                            <div>
                                <h5 class="text-neon mb-1">
                                    {{ $startup->name }}
                                </h5>

                                <span class="muted small">
                                    {{ $startup->industry }}
                                </span>
                            </div>
                        </div>

                        <p class="muted small mb-3">
                            Pendiri: {{ $startup->founder }}
                        </p>

                        <a
                            href="{{ route('startups.show', $startup) }}"
                            class="btn btn-outline-success mt-auto"
                        >
                            Lihat Detail &rarr;
                        </a>

                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="panel p-4 text-center">
                        <p class="muted mb-0">
                            Belum ada data startup.
                        </p>
                    </div>
                </div>
            @endforelse
        </div>

        @if ($startups->hasPages())
            <div class="d-flex justify-content-between
                        align-items-center gap-3 mt-4">

                <div>
                    @if ($startups->onFirstPage())
                        <button class="btn btn-outline-success" disabled>
                            &larr; Sebelumnya
                        </button>
                    @else
                        <a
                            href="{{ $startups->previousPageUrl() }}#directory"
                            class="btn btn-outline-success"
                        >
                            &larr; Sebelumnya
                        </a>
                    @endif
                </div>

                <span class="muted small text-center">
                    Halaman {{ $startups->currentPage() }}
                    dari {{ $startups->lastPage() }}
                </span>

                <div>
                    @if ($startups->hasMorePages())
                        <a
                            href="{{ $startups->nextPageUrl() }}#directory"
                            class="btn btn-neon"
                        >
                            Berikutnya &rarr;
                        </a>
                    @else
                        <button class="btn btn-neon" disabled>
                            Berikutnya &rarr;
                        </button>
                    @endif
                </div>

            </div>
        @endif
    </section>

</div>
@endsection