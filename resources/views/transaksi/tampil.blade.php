@extends('layout')
@section('konten')

<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0">{{ $judul }}</h1>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="/beranda">Beranda</a></li>
           <li class="breadcrumb-item active">Transaksi</li>
         </ol>
       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
              <h2 class="card-title">{{ __('bahasa.m_trans') }}</h2>
              <a href="/transaksi/create" class="btn btn-info" style="float: right">{{ __('bahasa.tambah') }}</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th>No</th>
                 <th>{{ __('bahasa.tgl_trans') }}</th>
                 <th>{{ __('bahasa.wkt_tras') }}</th>
                 <th>{{ __('bahasa.n_barang') }}</th>
                 <th>{{ __('bahasa.jum') }}</th>
                 <th>{{ __('bahasa.t_harga') }}</th>
                </tr>
                </thead>
                <tbody>
                  
                  @foreach ($data as $d)
               <tr>
                  <th>{{ $loop->iteration  }}</th>
                  <th>{{ $d->tgltransaksi }}</th>
                  <th>{{ $d->waktutransaksi }}</th>
                  <th>{{ $d->barang->namabarang }}</th>
                  <th>{{ $d->qty }}</th>
                  <th>{{ $d->totalharga }}</th>
               </tr>
                  @endforeach
                 
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
       </div>
       <!-- /.col-md-6 -->
   
       <!-- /.col-md-6 -->
     </div>
     <!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>

@endsection