<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">Himawari Gift Shop</a>
    <div class="navbar-nav">
      <a class="nav-link" href="/">Home</a>
      <a class="nav-link active" href="/katalog">Katalog</a>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h1 class="text-center mb-4">Katalog Himawari</h1>
    <div class="row">
        @foreach($products as $p)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ $p->image }}" class="card-img-top" alt="{{ $p->name }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $p->name }}</h5>
                    <p class="card-text text-muted">{{ $p->description }}</p>
                    <h4 class="text-primary">Rp {{ number_format($p->price, 0, ',', '.') }}</h4>
                    
                    <a href="https://wa.me/6285730593485?text=Halo%20Admin,%20saya%20mau%20pesan%20{{ urlencode($p->name) }}" 
                       target="_blank" 
                       class="btn btn-success w-100 mt-3">
                       Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>