@extends('layout.master')
@section('title', 'Data Pengajuan')
@section('content')

@if (auth()->user()->divisi == "teknisi")

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Data Pengajuan Barang Baru</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#"><span>Pengajuan</span></a></li>
                    <li class="active"><span>Barang Baru</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <p>
                            <a href="addbaru" class="btn btn-success btn-icon-anim">Tambah baru
                            </a>
                        </p>
                        <div class="clearfix"></div>
                        <div id="myTable1_wrapper" class="dataTables_wrapper">
                            <div class="dataTables_length" id="myTable1_length">
                                <label>Show <select name="myTable1_length" aria-controls="myTable1">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                </select> entries </label>
                            </div>
                            <div id="myTable1_filter" class="dataTables_filter"><label>Search:<input type="search" aria-controls="myTable1"></label></div>
                            <table id="myTable1" class="table table-hover display dataTable dtr-inline" role="grid" aria-describedby="myTable1_info" style="width: 1253px;"></table>
                        </div>
                    </div>

                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="">
                                    <table id="myTable1" class="table table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Status</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal pengajuan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($data_baru as $data_baru)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data_baru->namaBarang}}</td>
                                                <td>{{ $data_baru->jmlBarang}}</td>
                                                <td>
                                                    @if($data_baru->status === 1 )
                                                    Pengajuan disetujui Marketing
                                                    @elseif ($data_baru->status === 2 )
                                                    Pengajuan ditolak Marketing
                                                    @elseif ($data_baru->status === 3 )
                                                    Pengajuan disetujui Warehouse
                                                    @elseif ($data_baru->status === 4 )
                                                    Pengajuan ditolak Warehouse
                                                    @elseif ($data_baru->status === 5 )
                                                    Pengajuan disetujui Admin dan dalam proses pembelian
                                                    @elseif ($data_baru->status === 6 )
                                                    Pengajuan ditolak Admin
                                                    @elseif ($data_baru->status === 7 )
                                                    Barang telah dibeli dan akan segera dikirim
                                                    @else
                                                    Pengajuan diproses Marketing
                                                    @endif
                                                </td>
                                                <td>{{ $data_baru->keterangan}}</td>
                                                <td>{{ $data_baru->created_at}}</td>
                                                <td>
                                                    <a href="pengajuan/editBaru/{{ $data_baru->id_pengajuan }}"> <button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-edit"></i></button></a>
                                                    <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#hapusbaru" action="( {{url('deletebaru')}}/{{ $data_baru->id_pengajuan }})"><i class="fa fa-trash"></i></></button>
                                            </tr>
                                            @include('pengajuan.hapusbrgbaru')
                                            @endforeach
                                        </tbody>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->
    </div>
    @endif

<<<<<<< HEAD
@if (auth()->user()->divisi == "warehouse")
<!-- Main Content -->
<div class="page-wrapper">
=======
    @if (auth()->user()->divisi == "warehouse"||auth()->user()->divisi == "admin"||auth()->user()->divisi == "marketing")
    <!-- Main Content -->
    <div class="page-wrapper">
>>>>>>> eb16afe28ca1b22bc23ba70b44c509a17320665a
        <div class="container-fluid">

            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Data Pengajuan Barang Baru</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="#"><span>Pengajuan</span></a></li>
                        <li class="active"><span>Barang Baru</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">

                            </p>
                            <div class="clearfix"></div>
                            <div id="myTable1_wrapper" class="dataTables_wrapper">
                                <div class="dataTables_length" id="myTable1_length"><label>Show <select name="myTable1_length" aria-controls="myTable1" class="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                                <div id="myTable1_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="myTable1"></label></div>
                                <table id="myTable1" class="table table-hover display dataTable dtr-inline" role="grid" aria-describedby="myTable1_info" style="width: 1253px;">
                            </div>
                        </div>

                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <div class="table-wrap">
                                    <div class="">
                                        <table id="myTable1" class="table table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                    <th>Status</th>
                                                    <th>Keterangan</th>
                                                    <th>Tanggal pengajuan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <!-------------------------------------------------------------- Warehouse ------------------------------------------------------->
                                                @foreach ($data_baru as $data_baru)
                                                <tr>
                                                    @if (auth()->user()->divisi == "warehouse")
                                                    @if($data_baru->status >= 1 )
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data_baru->namaBarang}}</td>
                                                    <td>{{ $data_baru->jmlBarang}}</td>
                                                    <td>
                                                        @if($data_baru->status === 1 )
                                                        Pengajuan disetujui Marketing
                                                        @elseif ($data_baru->status === 2 )
                                                        Pengajuan ditolak Marketing
                                                        @elseif ($data_baru->status === 3 )
                                                        Pengajuan disetujui Warehouse
                                                        @elseif ($data_baru->status === 4 )
                                                        Pengajuan ditolak Warehouse
                                                        @elseif ($data_baru->status === 5 )
                                                        Pengajuan disetujui Admin dan dalam proses pembelian
                                                        @elseif ($data_baru->status === 6 )
                                                        Pengajuan ditolak Admin
                                                        @elseif ($data_baru->status === 7 )
                                                        Barang telah dibeli dan akan segera dikirim
                                                        @else
                                                        Pengajuan diproses Marketing
                                                        @endif
                                                    </td>
                                                    <td>{{ $data_baru->keterangan}}</td>
                                                    <td>{{ $data_baru->created_at}}</td>
                                                    <td>
                                                        <a href="#"> <button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-info"></i></button></a>
                                                        <a href="#"> <button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-check"></i></button></a>
                                                        <a href="#"> <button class="btn btn-danger btn-icon-anim btn-square"><i class="fa fa-times"></i></button></a>
                                                        @endif
                                                        <!-------------------------------------------------------------- ADMIN ------------------------------------------------------------>
                                                        @elseif (auth()->user()->divisi == "admin")
                                                        @if ($data_baru->status >= 3 )
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data_baru->namaBarang}}</td>
                                                    <td>{{ $data_baru->jmlBarang}}</td>
                                                    <td>
                                                        @if($data_baru->status === 1 )
                                                        Pengajuan disetujui Marketing
                                                        @elseif ($data_baru->status === 2 )
                                                        Pengajuan ditolak Marketing
                                                        @elseif ($data_baru->status === 3 )
                                                        Pengajuan disetujui Warehouse
                                                        @elseif ($data_baru->status === 4 )
                                                        Pengajuan ditolak Warehouse
                                                        @elseif ($data_baru->status === 5 )
                                                        Pengajuan disetujui Admin dan dalam proses pembelian
                                                        @elseif ($data_baru->status === 6 )
                                                        Pengajuan ditolak Admin
                                                        @elseif ($data_baru->status === 7 )
                                                        Barang telah dibeli dan akan segera dikirim
                                                        @else
                                                        Pengajuan diproses Marketing
                                                        @endif
                                                    </td>
                                                    <td>{{ $data_baru->keterangan}}</td>
                                                    <td>{{ $data_baru->created_at}}</td>
                                                    <td>
                                                        <a href="#"> <button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-info"></i></button></a>
                                                        <a href="#"> <button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-check"></i></button></a>
                                                        <a href="#"> <button class="btn btn-danger btn-icon-anim btn-square"><i class="fa fa-times"></i></button></a>
                                                        <!-- <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#hapusbaru" onclick="setEditForm( {{url('deletebaru')}}/{{ $data_baru->id_pengajuan }})"><i class="fa fa-trash"></i></></button> -->
                                                        @endif
                                                        <!-------------------------------------------------------------- PURCHASING ------------------------------------------------------------>
                                                        @elseif (auth()->user()->divisi == "purchasing")
                                                        @if ($data_baru->status >= 5 )
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data_baru->namaBarang}}</td>
                                                    <td>{{ $data_baru->jmlBarang}}</td>
                                                    <td>
                                                        @if($data_baru->status === 1 )
                                                        Pengajuan disetujui Marketing
                                                        @elseif ($data_baru->status === 2 )
                                                        Pengajuan ditolak Marketing
                                                        @elseif ($data_baru->status === 3 )
                                                        Pengajuan disetujui Warehouse
                                                        @elseif ($data_baru->status === 4 )
                                                        Pengajuan ditolak Warehouse
                                                        @elseif ($data_baru->status === 5 )
                                                        Pengajuan disetujui Admin dan dalam proses pembelian
                                                        @elseif ($data_baru->status === 6 )
                                                        Pengajuan ditolak Admin
                                                        @elseif ($data_baru->status === 7 )
                                                        Barang telah dibeli dan akan segera dikirim
                                                        @else
                                                        Pengajuan diproses Marketing
                                                        @endif
                                                    </td>
                                                    <td>{{ $data_baru->keterangan}}</td>
                                                    <td>{{ $data_baru->created_at}}</td>
                                                    <td>
                                                        <a href="#"> <button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-info"></i></button></a>
                                                        <a href="#"> <button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-check"></i></button></a>
                                                        <a href="#"> <button class="btn btn-danger btn-icon-anim btn-square"><i class="fa fa-times"></i></button></a>
                                                        <!-- <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#hapusbaru" onclick="setEditForm( {{url('deletebaru')}}/{{ $data_baru->id_pengajuan }})"><i class="fa fa-trash"></i></></button> -->
                                                        @endif
                                                        <!-------------------------------------------------------------- MARKETING ------------------------------------------------------------>
                                                        @elseif (auth()->user()->divisi == "marketing")
                                                    <td>{{ $data_baru->namaBarang}}</td>
                                                    <td>{{ $data_baru->jmlBarang}}</td>
                                                    <td>
                                                        @if($data_baru->status === 1 )
                                                        Pengajuan disetujui Marketing
                                                        @elseif ($data_baru->status === 2 )
                                                        Pengajuan ditolak Marketing
                                                        @elseif ($data_baru->status === 3 )
                                                        Pengajuan disetujui Warehouse
                                                        @elseif ($data_baru->status === 4 )
                                                        Pengajuan ditolak Warehouse
                                                        @elseif ($data_baru->status === 5 )
                                                        Pengajuan disetujui Admin dan dalam proses pembelian
                                                        @elseif ($data_baru->status === 6 )
                                                        Pengajuan ditolak Admin
                                                        @elseif ($data_baru->status === 7 )
                                                        Barang telah dibeli dan akan segera dikirim
                                                        @else
                                                        Pengajuan diproses Marketing
                                                        @endif
                                                    </td>
                                                    <td>{{ $data_baru->keterangan}}</td>
                                                    <td>{{ $data_baru->created_at}}</td>
                                                    <td>
                                                        <a href="#"> <button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-info"></i></button></a>
                                                        <a href="#"> <button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-check"></i></button></a>
                                                        <a href="#"> <button class="btn btn-danger btn-icon-anim btn-square"><i class="fa fa-times"></i></button></a>
                                                        <!-- <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#hapusbaru" onclick="setEditForm( {{url('deletebaru')}}/{{ $data_baru->id_pengajuan }})"><i class="fa fa-trash"></i></></button> -->
                                                        @endif
                                                </tr>
                                                @include('pengajuan.hapusbrgbaru')
                                                @endforeach
                                            </tbody>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Content -->
        </div>
<<<<<<< HEAD
        <!-- /Main Content -->
    </div>
@endif



=======
        @endif
>>>>>>> eb16afe28ca1b22bc23ba70b44c509a17320665a
        <!-- /#wrapper -->
        @endsection