@extends('layout')
@section('konten')

<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="/profil">Profil</a></li>
           <li class="breadcrumb-item active">selanjutnya</li>
         </ol>
       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <div class="content">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="card">
                  <div class="card-header">
                      <h2 class="card-title">Tambah Data Barang</h2>
                  </div>
                  <div class="card-body">
                      @foreach($barangs as $d)
                      <form action="/barang/update" method="post">
                          @csrf
                          <input type="hidden" name="id" value="{{ $d->idbarang }}">
                          <div class="form-group">
                              <label for="namabarang">Nama Barang</label>
                              <input type="text" class="form-control" required="required" name="namabarang" value="{{ $d->namabarang }}">
                          </div>
                          <div class="form-group">
                              <label for="harga">Harga</label>
                              <input type="number" class="form-control" required="required" name="harga" value="{{ $d->harga }}">
                          </div>
                          <div class="form-group">
                              <label for="stok">Stok</label>
                              <input type="number" class="form-control" required="required" name="stok" value="{{ $d->stok }}">
                          </div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                      </form>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>



 @endsection