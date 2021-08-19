@extends('layout.master')
@section('title', 'Data Barang')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Data Barang</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="inventory">Warehouse</a></li>
                    <li class="active"><span>Data Barang</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    
                    @if(auth()->user()->divisi != "office")
                        <div class="panel-heading">
                            <div class="pull-left">
                                <!-- <h6 class="panel-title txt-dark">DataTable</h6> -->
                                <!-- <button data-toggle="modal" data-target="#myModal" class="btn btn-success col-mr-2" >Tambah Barang</button> -->                               
                                <a href="databrg/addbarang" class="btn btn-success"> Tambah Data</a>
                                <!-- <button class="btn btn-primary btn-sm btn-icon mb-3"><i class="fa fa-plus fa-sm"></i> Tambah Data</button> -->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endif

                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="datable_1" class="table table-bordered display pb-30">
                                        <thead>
                                            <tr>
                                                <th>Kode Barang </th>
                                                <th>Nama Barang</th>
                                                <th>Jenis</th>
                                                <th>Stok</th>
                                                <th>Gambar</th>
                                                <th>Status</th>
                                                @if(auth()->user()->divisi != "office")
                                                <th>Aksi</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barang as $brg)
                                            <tr>
                                                <td>{{$brg->kode_barang}}</td>
                                                <td>{{$brg->nama_barang}}</td>
                                                <td>{{$brg->jenis_barang}}</td>
                                                <td>{{$brg->stok}}</td>
                                                <td>
                                                    @if($brg->gambar)
                                                    <img src="{{ url('img/logo') }}/{{ $brg->gambar }}" style="width: 150px; height: 150px;">
                                                    @endif
                                                </td>
                                                <td style="text-align:center;">
                                                    @if($brg->status == 'aktif')
                                                    <button class="btn btn-primary btn-sm  btn-rounded">Aktif</button>
                                                    @else
                                                    <button class="btn btn-danger btn-sm  btn-rounded">Non Aktif</button>
                                                    @endif
                                                </td>
                                                @if(auth()->user()->divisi != "office")
                                                <td>
                                                    <a href="#"><button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-eye"></i></button></a>
                                                    <a href="/databrg/editBarang/{{ $brg->id_master }}"><button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-edit"></i></button></a>
                                                    <!-- <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#hapusbrg{{ $brg->id_master }}" action="( {{url('deletebarang')}}/{{ $brg->id_master }})"><i class="fa fa-trash"></i></button> -->
                                                </td>
                                                @endif
                                            </tr>
                                            @include('master.hapusbrg')
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>
</div>
<!-- /Main Content -->
</div>
<!-- /#wrapper -->
@endsection