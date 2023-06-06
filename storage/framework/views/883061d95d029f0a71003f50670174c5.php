<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body class="bg-dark">
    <div class="container text-center mt-5 py-2 px-4 bg-light rounded-3 border">
        <h4 class="text-center "><b>UTS TAKE HOME : MASTER BARANG</h4>
        <div class="row">
            <div class="col text-start">
                <h5>SELAMAT DATANG DI MASTER BARANG</h5>
                <p>Website ini merupakan website untuk mengelola barang secara general dengan mengimplementasikan CRUD (Create, Read, Update, Delete).</p>
                <p>Website ini berisi halaman:</p>
                <p>List Barang</p>
                <p>Input Barang</p>
                <p>Edit Barang</p>
            </div>
            <div class="col">
                <h5><b>Preview Halaman</b></h5>
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="<?php echo e(Vite::asset('resources/images/list.png')); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Halaman List Barang</h5>
                          <p>Halaman ini berisi seluruh barang yang dapat diolah.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo e(Vite::asset('resources/images/input.png')); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Halaman Input Barang</h5>
                          <p>Halaman ini berisi form untuk menginputkan barang kedalam list yang sudah ada.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="<?php echo e(Vite::asset('resources/images/edit.png')); ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Halaman Edit Barang</h5>
                          <p>Pada halaman ini memungkinkan kita untuk menyunting data yang sebelumnya sudah diinput.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-dark placeholder-wave">List Barang</a>
        </div>


    <div class="container text-start mt-5 py-2 px-4 bg-light rounded-3 border">
            <h4><b>BIODATA</b></h4>
            <h5><b>Nama       :</b> Muhammad Albar As'adillah</h5>
            <h5><b>NIM        :</b> 1204210072</h5>
            <h5><b>Mata Kuliah:</b> Pemrograman Framework</h5>
            <h5><b>Program Studi:</b> Sistem Informasi</h5>

    </div>


    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH D:\ALBAR\Mata Kuliah\Framework\UTS\masterBarangUts\resources\views/home.blade.php ENDPATH**/ ?>