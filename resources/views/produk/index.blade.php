@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a>
                        </div>
                        <div>
                            <h5>Data Produk</h5>
                        </div>
                    </div>
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Qty</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Dibuat Pada</th>
                                <th>Diedit Pada</th>
                                <th colspan="3" style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $i => $p)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->kategori->nama }}</td>
                                    <td>{{ $p->qty }}</td>
                                    <td>{{ $p->harga_beli }}</td>
                                    <td>{{ $p->harga_jual }}</td>
                                    <td>{{ $p->created_at }}</td>
                                    <td>{{ $p->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('produk.show', $p->id) }}" class="btn btn-warning"> Detail</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('produk.edit', $p->id) }}"> Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" action="{{ route('produk.destroy', $p->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
