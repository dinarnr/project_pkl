@extends('layout.master')
@section('title', 'Detail Masuk Retur')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Detail Masuk Retur</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Transaksi</a></li>
                    <li><a href="#"><span>Transaksi Masuk Retur</span></a></li>
                    <li class="active"><span>Detail Masuk Retur</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default card-view">
                  

                    <div class="invoice-bill-table">
                        <div class="table-responsive">
                            <table id="myTable1" class="table table display pb-30">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tgl Transaksi</th>
                                        <th>No transaksi</th>
                                        <th>Instansi</th>
                                        <th>Nama barang</th>
                                        <th>Jumlah</th>
                                        <th>Pengirim Ekspedisi</th>
                                        <th>Penerima</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($transaksi_retur as $transaksi_retur)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $transaksi_retur->tgl_transaksi}}</td>
                                        <td>{{ $transaksi_retur->no_transaksi}}</td>
                                        <td>{{ $transaksi_retur->instansi}}</td>
                                        <td>{{ $transaksi_retur->nama_barang}}</td>
                                        <td>{{ $transaksi_retur->jumlah}}</td>
                                        <td>{{ $transaksi_retur->pengirim}}</td>
                                        <td>{{ $transaksi_retur->penerima}}</td>
                                        <td>{{ $transaksi_retur->keterangan}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!--  -->
                        <div class="clearfix"></div>
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

<!-- /Row -->

</div>

</div>
<!-- /Main Content -->

</div>
<!-- /#wrapper -->

@endsection