@extends('layout.master')
@section('title', 'Data Transaksi')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
<<<<<<< HEAD
                <h5 class="txt-dark">Data Transaksi</h5><br>
                <a href="transaksi/transaksi_masuk_baru" class="btn btn-primary btn-icon-anim"><i class="fa fa succes"></i> MASUK</a>
                <a href="transaksi/transaksi_masuk_retur" class="btn btn-primary btn-icon-anim"><i class="fa fa succes"></i> KELUAR</a>
=======
                <h5 class="txt-dark">Data Barang Masuk</h5><br>
<<<<<<< HEAD
                <a href="#" class="btn btn-primary btn-icon-anim"><i class="fa fa succes"></i> MASUK</a>
                <a href="#" class="btn btn-primary btn-icon-anim"><i class="fa fa succes"></i> KELUAR</a>
>>>>>>> a1dc93dc38628a73d5a3549f64ea430dd4aba47d
=======
                <a href="/transaksi" class="btn btn-primary btn-icon-anim"><i class="fa fa succes"></i> MASUK</a>
                <a href="/transaksikeluar" class="btn btn-primary btn-icon-anim"><i class="fa fa succes"></i> KELUAR</a>
>>>>>>> 12198fd21f31b88df1bac8f1b6acfee3e43dedbf
            </div>


            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="inventory">Transaksi</a></li>
                    <li class="active"><span>Data Barang Masuk</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- Row -->
<<<<<<< HEAD
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">

                    </div>
                    <div class="clearfix"></div>

                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="datable_1" class="table table-bordered display pb-30">
        <div class="col-lg-12 col-sm-12 mt-10">
=======
        <div class="col-lg-12 col-md-12 mt-10">
>>>>>>> a1dc93dc38628a73d5a3549f64ea430dd4aba47d
			<div class="panel panel-default card-view">
				<div class="panel-heading">
					<div class="pull-left">
						<h6 class="panel-title txt-dark">Barang Masuk</h6>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-wrapper collapse in">
					<div class="panel-body">
						<div  class="tab-struct custom-tab-1 ">
							<ul role="tablist" class="nav nav-tabs" id="myTabs_7">
								<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="home_tab_7" href="#masuk_baru">Baru</a></li>
								<li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_7" role="tab" href="#masuk_retur" aria-expanded="false">Retur</a></li>
								
							</ul>
                            <!-- BARANG -->
							<div class="tab-content" id="myTabContent_7">
								<div  id="masuk_baru" class="tab-pane fade active in" role="tabpanel">
								<table id="data_table1" class="table table-bordered display  pb-30">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No transaksi</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Nama Barang</th>
                                                <th>Supplier</th>
                                                <!-- <th>Created at</th> -->
                                                <!-- <th>Pengirim</th> -->
                                                <!-- <th>Penerima</th>/ -->
                                                <!-- <th>Ekspedisi</th> -->
                                                <!-- <th>Kondisi</th> -->
                                                <th colspan="3">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($transaksi_masuk as $transaksi_masuk)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $transaksi_masuk->no_transaksi}}</td>
                                                <td>{{ $transaksi_masuk->tgl_transaksi}}</td>
                                                <td>{{ $transaksi_masuk->nama_barang }}</td>
                                                <td>{{ $transaksi_masuk->nama_supplier }}</td>
                                                <!-- <td>{{ $transaksi_masuk->pengirim }}</td> -->
                                                <!-- <td>{{ $transaksi_masuk->penerima }}</td> -->
                                                <!-- <td>{{ $transaksi_masuk->ekspedisi }}</td> -->
                                                <!-- <td>{{ $transaksi_masuk->kondisi }}</td> -->
                                                <td>
                                                    <a href="#"><button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-eye"></i></button></a>
                                                    <a href="#"><button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-edit"></i></button></a>
                                                    <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#" action="#"><i class="fa fa-trash"></i></button>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        @include('transaksi.editbrgmasuk')
                                    </table>
                                </div>
								
                                <!-- BARANG RETUR -->
                                <div  id="masuk_retur" class="tab-pane fade" role="tabpanel">
                                <table id="data_table1" class="table table-bordered display  pb-30">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No transaksi</th>
                                                <!-- <th>Supplier</th>
                                                <th>Jenis transaksi</th> -->
                                                <th>Tanggal Transaksi</th>
                                                <th>Nama Barang</th>
                                                <th>Created at</th>
                                                <!-- <th>Pengirim</th> -->
                                                <!-- <th>Penerima</th>/ -->
                                                <!-- <th>Ekspedisi</th> -->
                                                <!-- <th>Kondisi</th> -->
                                                <th colspan="3">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($transaksi_retur as $transaksi_retur)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $transaksi_retur->no_transaksi}}</td>
                                                <td>{{ $transaksi_retur->tgl_transaksi}}</td>
                                                <!-- <td>{{ $transaksi_retur->nama_supplier }}</td> -->
                                                <!-- <td>{{ $transaksi_retur->jns_transaksi }}</td> -->
                                                <td>{{ $transaksi_retur->nama_barang }}</td>
                                                <td>{{ $transaksi_retur->created_at }}</td>
                                                <!-- <td>{{ $transaksi_masuk->pengirim }}</td> -->
                                                <!-- <td>{{ $transaksi_masuk->penerima }}</td> -->
                                                <!-- <td>{{ $transaksi_masuk->ekspedisi }}</td> -->
                                                <!-- <td>{{ $transaksi_masuk->kondisi }}</td> -->
                                                <td>
                                                    <a href="#"><button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-eye"></i></button></a>
                                                    <a href="#"><button class="btn btn-success btn-icon-anim btn-square"><i class="fa fa-edit"></i></button></a>
                                                    <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#" action="#"><i class="fa fa-trash"></i></button>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        @include('transaksi.editbrgmasuk')
                                    </table>
								</div>
								
							</div>
						</div>
					</div>
				</div>
            </div>
		</div>
        
        <!-- /Row -->
        @include('transaksi.hapusbrngmasuk')
    </div>
</div>
<!-- /Main Content -->
</div>
<!-- /#wrapper -->
@endsection
