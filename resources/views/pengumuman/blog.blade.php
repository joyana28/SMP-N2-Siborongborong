<section class="blog-section">
    <div class="container">
        <div class="section-title">
            <h2>Latest News & Articles</h2>
        </div>
        <div class="blog-grid">
            @foreach ($pengumuman as $item)
                <div class="blog-card">
                    <div class="blog-image">
                        <img src="{{ asset('storage/pengumuman/' . $item->foto) }}" alt="Blog" style="object-fit: cover;">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="far fa-calendar"></i> {{ \Carbon\Carbon::parse($item->tanggal_terbit)->format('F d, Y') }}</span>
                        </div>
                        <h3>{{ $item->judul }}</h3>
                        <p>{{ Str::limit($item->isi, 150) }}</p>
                            <a href="{{ route('pengumuman.showBlog', $item->id_pengumuman) }}" class="read-more">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
