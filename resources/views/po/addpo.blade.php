@extends('layout.master')
@section('title', 'Data Pengajuan')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">

        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Buat Purchase Order Baru</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="purchasing">Purchase Order</a></li>
                    <li class="active"><span>Buat Purchase Order Baru</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view ">
                    <!-- <div class="panel-heading">
                                <div class="clearfix"></div>
                            </div> -->
                    <div class="panel-wrapper collapse in ">
                        <div class="panel-body">
                            <div class="form-wrap mt-3">
                                <form action="{{ url('addpo2') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="example-email">Nomor PO Barang</label>
                                        <input type="text" id="noPO" name="noPO" class="form-control" readonly>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="example-email">Nama Barang</label>
                                        <input type="text" id="namaBarang" name="namaBarang" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="example-email">Jumlah Barang</label>
                                        <input type="number" id="jumlah" name="jumlah" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10 text-left" for="example-email">Keterangan </label>
                                        <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Simpan</button>
                                        <button class="btn btn-danger  " name="reset" type="reset">Batal
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
        <!-- /Main Content -->
    </div>
    <!-- /#wrapper -->
    @endsection