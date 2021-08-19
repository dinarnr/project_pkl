@extends('layout.master')
@section('title', 'Purchase Order')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Purchase Order</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <!-- <li><a href="inventory"></a></li> -->
                    <!-- <li class="active"><span>Data Pembelian</span></li> -->
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <a href="pembelian/addpembelian" class="btn btn-success">Tambah Data</a>
                        </div>

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
                                    <table id="myTable1" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No PO</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th colspan="3">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($purchase as $purchase)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $purchase->no_PO }}</td>
                                                <td>{{ $purchase->namaBarang }}</td>
                                                <td>{{ $purchase->jumlah }}</td>
                                                <td>
                                                <!-- <a href="#"><button class="btn btn-primary btn-icon-anim btn-square"><i class="fa fa-eye"></i></button></a> -->
                                                <a href="addinvoice/{{ $purchase->id_PO }}"><button class="btn btn-primary btn-icon-anim">Tambah Invoice </button></a>
                                                <!-- <i class="fa fa-edit"></i> <button class="btn btn-danger btn-icon-anim btn-square" data-toggle="modal" data-target="#" action="#"><i class="fa fa-trash"></i></button> -->
                                                </td>
                                            </tr>
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
        <!-- /Row -->
    </div>
</div>
<!-- /Main Content -->
</div>
<!-- /#wrapper -->
@endsection
