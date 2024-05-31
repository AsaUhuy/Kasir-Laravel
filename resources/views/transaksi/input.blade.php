@extends('layout')
@section('konten')
<div class="row p-2">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row mt-1">
                    <div class="col-md-4">
                        <label for="">{{ __('bahasa.n_barang') }}</label>
                    </div>
                    <div class="col-md-8">
                        <form method="GET">
                        <div class="d-flex">
                        <select name="produk_id" class="form-control" id="">
                            <option value="">-- {{ isset($b_detail) ? $b_detail->namabarang : 'TwT' }} --</option>
                            @foreach ($data as $item)
                            <option value="{{ $item['idbarang'] }}">{{ $item['namabarang'] }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">{{ __('bahasa.pilih') }}</button>
                        </div>
                    </form>
                    </div>
                </div>
                <form action="store" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">{{ __('bahasa.tgl_trans') }}</label>
                        </div>
                        <div class="col-md-8">
                            <input type="date" name="tgltransaksi" class="form-control" placeholder="Waktu transaksi">                    </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">{{ __('bahasa.wkt_tras') }}</label>
                        </div>
                        <div class="col-md-8">
                            <input type="time" name="waktutransaksi" class="form-control" placeholder="Waktu transaksi">                    </div>
                    </div>
                    <input type="number" name="iduser" value="0" class="form-control" hidden>
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">{{ __('bahasa.c_barang') }}</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" hidden value="{{ isset($b_detail) ? $b_detail->idbarang : '' }}" name="idbarang">
                            <input value="{{ isset($b_detail) ? $b_detail->idbarang : '' }}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">{{ __('bahasa.s_harga') }}</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" value="{{ isset($b_detail) ? $b_detail->harga : '' }}" class="form-control" disabled name="hargasatuan">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">{{ __('bahasa.jum') }}</label>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex">
                            <a href="?produk_id={{ request('produk_id') }}&act=min&qty={{ $qty }}" class="btn btn-primary"><i class="fas fa-minus"></i></a>
                            <input type="number" value="{{ $qty }}" class="form-control" name="qty">
                            <a href="?produk_id={{ request('produk_id') }}&act=plus&qty={{ $qty }}"  class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">{{ __('bahasa.t_harga') }}</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" hidden value="{{ $subtotal }}" class="form-control" name="totalharga" >
                            <input type="number" value="{{ $subtotal }}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
                            <a href="/transaksi" class="btn btn-info"><i class="fas fa-arrow-left"></i>{{ __('bahasa.kembali') }}</a>
                            <input class="btn" style="background-color:rgb(0, 149, 255);" type="submit" name="submit" value="{{ __('bahasa.simpan') }}">
                            {{-- <button type="submit" class="btn btn-primary"><i class="fas fa-arrow-right"></i> Tambah</button>                     --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection