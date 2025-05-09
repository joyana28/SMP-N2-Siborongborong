<section class="blog-detail">
    <div class="container">
        <h2>{{ $pengumuman->judul }}</h2>
        <p class="date">{{ \Carbon\Carbon::parse($pengumuman->tanggal_terbit)->format('F d, Y') }}</p>
        @if ($pengumuman->foto)
            <div class="blog-image">
                <img src="{{ asset('storage/pengumuman/' . $pengumuman->foto) }}" alt="Foto Pengumuman" style="width:100%; max-height:400px; object-fit:cover;">
            </div>
        @endif
        <div class="blog-content">
            {!! nl2br(e($pengumuman->isi)) !!}
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">← Kembali</a>
    </div>
</section>
