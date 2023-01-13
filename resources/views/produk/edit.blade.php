@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <h5>Edit Data Produk</h5>
                    <hr>

                    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <input name="nama" type="text" class="form-control" id="nama"
                                    value="{{ $produk->nama }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kategori" class="col-sm-2 col-form-label">Kategori Produk</label>
                            <div class="col-sm-10">
                                <select name="kategori" class="form-select" id="kategori">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $k)
                                        <option value="{{ $k->id }}"
                                            @if ($produk->id_kategori == $k->id) selected @endif>{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="qty" class="col-sm-2 col-form-label">Qty Awal</label>
                            <div class="col-sm-10">
                                <input name="qty" type="text" class="form-control" id="qty"
                                    value="{{ $produk->qty }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jual" class="col-sm-2 col-form-label">Harga Jual</label>
                            <div class="col-sm-10">
                                <input name="jual" type="text" class="form-control" id="jual"
                                    value="{{ $produk->harga_jual }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="beli" class="col-sm-2 col-form-label">Harga Beli</label>
                            <div class="col-sm-10">
                                <input name="beli" type="text" class="form-control" id="beli"
                                    value="{{ $produk->harga_beli }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit" class="btn btn-primary">Perbaharui Data</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
