@extends('layouts.app')

@section('content')
<div class="col-10"><div class="table-responsive border p-3 rounded-3">
    <table class="table table-bordered table-hover table-striped mb-0 bg-white">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Deskripsi Barang</th>
                <th>Satuan Barang</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
            <tr>
                <td>{{ $barang->kode }}</td>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->deskripsi }} </td>
                <td>{{ $barang->satuan}} </td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('barang.edit', ['barang' => $barang->id]) }}" class="btn btn-outline-primary btn-sm me-2"><i class="bi-pencil-square"></i>Edit</a>
                        <form action="{{ route('barang.destroy', ['barang' => $barang->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btn-sm me-3"><i class="bi-trash ">Delete</i></button>
                    </div>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection

