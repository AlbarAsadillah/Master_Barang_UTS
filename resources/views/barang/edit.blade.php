@extends('layouts.app')

@section('content')
            <div class="col-10">
                <div class="container-sm mt-3">
                    <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row justify-content-center">
                            <div class="p-5 bg-light rounded-3 border col-xl-12">

                                <div class="mb-3">
                                    <i class="bi-box fs-1"></i>
                                    <h4>Input Barang</h4>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="firstName" class="form-label">Kode Barang</label>
                                        <input class="form-control @error('kode') is-invalid @enderror" type="text" name="kode" id="kode" value="{{ old('kode', $barang->kode) }}"  placeholder="Masukkan Kode barang">
                                        @error('kode')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="lastName" class="form-label">Nama Barang</label>
                                        <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" value="{{ old('nama', $barang->nama) }}"  placeholder="Masukkan Nama Barang">
                                        @error('nama')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="email" class="form-label">Harga Barang</label>
                                        <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" id="harga" value="{{ old('harga', $barang->harga) }}" placeholder="Masukkan Harga Barang">
                                        @error('harga')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="age" class="form-label">Deskripsi Barang</label>
                                        <input class="form-control @error('deskripsi') is-invalid @enderror" type="text" name="deskripsi" id="deskripsi" value="{{ old('deskripsi', $barang->deskripsi) }}" placeholder="Masukkan Deskripsi Barang">
                                        @error('deskripsi')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="satuan" class="form-label">Satuan Barang</label>
                                        <select name="satuan" id="satuan" class="form-select">

                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}" {{ old('satuan') == $satuan->id ? 'selected' : '' }}>{{ $satuan->kodeSatuan.' - '.$satuan->namaSatuan }}</option>
                                @endforeach

                                        </select>
                                        @error('satuan')
                                            <div class="text-danger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6 text-center d-grid gap-2">
                                        <a href="{{ route('barang.index') }}" class="btn btn-outline-danger btn-lg mt-3 "><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                                    </div>
                                    <div class="col-6 d-grid gap-2">
                                        <button type="submit" class="btn btn-success btn-lg mt-3 placeholder-wave "><i class="bi-check-circle me-2" ></i> Update</button>
                                    </div>
                                </div>
                        </div>
                    </form>
                </div>
        </div>
        @endsection
