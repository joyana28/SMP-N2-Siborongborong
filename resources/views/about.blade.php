@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <h1 class="text-center mb-5 fw-bold">Tentang SMP Negeri 2 Siborongborong</h1>

    <!-- Visi & Misi -->
    <div class="mb-5">
        <h2 class="fw-semibold">Visi</h2>
        @if ($about && $about->visi)
            <p>{{ $about->visi }}</p>
        @else
            <p>Terwujudnya peserta didik yang berprestasi, berakhlak mulia, berwawasan lingkungan, serta mampu bersaing di era global.</p>
        @endif

        <h2 class="fw-semibold mt-4">Misi</h2>
        <ul>
            @if ($about && $about->misi)
                @foreach(explode("\n", $about->misi) as $misi)
                    <li>{{ $misi }}</li>
                @endforeach
            @else
                <li>Meningkatkan mutu pembelajaran dan prestasi siswa dalam bidang akademik maupun non-akademik.</li>
                <li>Menumbuhkan sikap religius, jujur, disiplin, dan tanggung jawab dalam kehidupan sehari-hari.</li>
                <li>Menciptakan lingkungan sekolah yang bersih, sehat, dan nyaman.</li>
                <li>Mendorong siswa untuk berinovasi dan mengembangkan potensi diri sesuai minat dan bakat.</li>
                <li>Menjalin kerja sama yang harmonis antara sekolah, orang tua, dan masyarakat.</li>
            @endif
        </ul>
    </div>
@endsection
