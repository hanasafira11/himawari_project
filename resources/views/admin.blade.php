<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <h2>Dashboard Admin - Himawari</h2>
        <a href="/katalog" class="btn btn-secondary">Lihat Katalog</a>
    </div>
    <hr>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card card-body mb-5 shadow-sm">
        <h4>Tambah Produk Baru</h4>
        <form action="/admin/add" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3"><input type="text" name="name" class="form-control mb-2" placeholder="Nama Produk" required></div>
                <div class="col-md-3"><input type="number" name="price" class="form-control mb-2" placeholder="Harga" required></div>
                <div class="col-md-2"><input type="number" name="stock" class="form-control mb-2" placeholder="Stok" required></div>
                <div class="col-md-4"><input type="text" name="image" class="form-control mb-2" placeholder="URL Link Gambar" required></div>
                <div class="col-12"><textarea name="description" class="form-control mb-2" placeholder="Deskripsi"></textarea></div>
                <div class="col-12"><button class="btn btn-primary w-100">Simpan Produk</button></div>
            </div>
        </form>
    </div>

    <h4>Daftar Stok Produk</h4>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>Rp {{ number_format($p->price) }}</td>
                <td width="200">
                    <form action="/admin/update-stock/{{ $p->id }}" method="POST" class="d-flex">
                        @csrf @method('PUT')
                        <input type="number" name="stock" value="{{ $p->stock }}" class="form-control form-control-sm me-2">
                        <button class="btn btn-sm btn-info text-white">Update</button>
                    </form>
                </td>
                <td>
                    <form action="/admin/delete/{{ $p->id }}" method="POST" onsubmit="return confirm('Yakin hapus?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>