@extends('layouts.app')

@section('title', 'Detail Startup - BOLD')

@section('content')
<div class="container py-4">

    <a href="{{ route('startups.index') }}"
       class="btn btn-outline-success mb-4">
        &larr; Kembali ke Daftar
    </a>

    <div class="panel p-4 p-md-5">

        <div class="d-flex flex-column flex-md-row
                    align-items-md-center gap-4 mb-4">

            <img
                src="{{ asset('assets/images/' . $startup->logo) }}"
                alt="Logo {{ $startup->name }}"
                class="startup-logo"
                style="width: 100px; height: 100px;"
                onerror="this.style.display='none'"
            >

            <div>
                <p class="text-neon fw-bold mb-2">
                    DETAIL STARTUP
                </p>

                <h1 class="fw-bold">
                    {{ $startup->name }}
                </h1>

                <p class="muted mb-0">
                    {{ $startup->industry }}
                </p>
            </div>

        </div>

        <hr style="border-color: var(--border);">

        <div class="mt-4">
            <h5 class="text-neon">Informasi Startup</h5>

            <div class="mt-3 mb-3">
                <strong>Pendiri</strong>
                <p class="muted mt-1">
                    {{ $startup->founder ?: 'Belum tersedia' }}
                </p>
            </div>

            <div class="mb-3">
                <strong>Bidang Industri</strong>
                <p class="muted mt-1">
                    {{ $startup->industry ?: 'Belum tersedia' }}
                </p>
            </div>

            <div class="mb-3">
                <strong>Deskripsi</strong>
                <p class="muted mt-1">
                    {{ $startup->description ?: 'Deskripsi belum tersedia.' }}
                </p>
            </div>

            <div class="mb-3">
                <strong>Website Resmi</strong>
                <p class="mt-1">
                    @if ($startup->website)
                        <a
                            href="{{ $startup->website }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-neon"
                        >
                            Kunjungi Website &rarr;
                        </a>
                    @else
                        <span class="muted">
                            Website belum tersedia.
                        </span>
                    @endif
                </p>
            </div>
        </div>

        <a href="{{ route('startups.index') }}"
           class="btn btn-neon mt-3">
            Kembali ke Daftar Startup
        </a>

    </div>

</div>
@endsection