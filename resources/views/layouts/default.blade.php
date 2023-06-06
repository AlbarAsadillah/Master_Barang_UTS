<div class="container">
    <div class="container mt-2">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h6 class="mb-3 text-light">{{ $pageTitle }}</h6>
                <hr>
            </div>
        </div>
{{-- SIDEBAR --}}
    <div class="row ">
        <div class="col-2">
            <a href="{{ route('barang.index') }}" class="btn btn-outline-light mt-3"><i class="bi bi-card-list me-2"></i> List Barang</a>
            <a href="{{ route('barang.create') }}" class="btn btn-outline-light  mt-1"><i class="bi bi-plus-circle me-2"></i> Input Barang</a>
        </div>
