@extends('layouts.backend.app')

@section('content')
<div class="container">
    <h2 class="text-center font-bold text-xl mb-4">PENGUMUMAN</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3 text-right">
        <input type="text" id="search" class="form-control w-50 d-inline-block" placeholder="Search:">
        <a href="{{ route('admin.pengumuman.create') }}" class="btn btn-primary">+ Tambah Pengumuman</a>
    </div>

    <table class="table table-bordered">
        <thead class="bg-dark text-white text-center">
            <tr>
                <th>NO.</th>
                <th>JUDUL</th>
                <th>ISI</th>
                <th>TANGGAL TERBIT</th>
                <th>TANGGAL BERAKHIR</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody id="pengumuman-table">
            @foreach($pengumuman as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->isi }}</td>
                <td>{{ $item->tanggal_terbit }}</td>
                <td>{{ $item->tanggal_berakhir }}</td>
                <td>
                    <a href="{{ route('admin.pengumuman.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.pengumuman.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    const searchInput = document.getElementById("search");
    const tableRows = document.querySelectorAll("#pengumuman-table tr");

    searchInput.addEventListener("keyup", function () {
        const query = this.value.toLowerCase();
        tableRows.forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(query) ? "" : "none";
        });
    });
</script>
@endsection
