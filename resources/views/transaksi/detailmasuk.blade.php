@extends('layout.master')
@section('title', 'Detail Masuk Baru')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Detail Masuk Baru</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Transaksi</a></li>
                    <li><a href="#"><span>Transaksi Masuk Baru</span></a></li>
                    <li class="active"><span>Detail Masuk Baru</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default card-view">
                    <!-- <div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Invoice</h6>
									</div>
									<div class="pull-right">
										<h6 class="txt-dark">Order # 12345</h6>
									</div>
									<div class="clearfix"></div>
								</div> -->
                    <!-- <div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-xs-6">
												<span class="txt-dark head-font inline-block capitalize-font mb-5">Billed to:</span>
												<address class="mb-15">
													<span class="address-head mb-5">Fasbook, Inc.</span>
													795 Folsom Ave, Suite 600 <br>
													San Francisco, CA 94107 <br>
													<abbr title="Phone">P:</abbr>(133) 456-7890
												</address>
											</div>
											<div class="col-xs-6 text-right">
												<span class="txt-dark head-font inline-block capitalize-font mb-5">shiped to:</span>
												<address class="mb-15">
													<span class="address-head mb-5">Xyz, Inc.</span>
													795 Folsom Ave, Suite 600 <br>
													San Francisco, CA 94107 <br>
													<abbr title="Phone">P:</abbr>(123) 456-7890
												</address>
											</div>
										</div> -->

                    <!-- <div class="row">
											<div class="col-xs-6">
												<address>
													<span class="txt-dark head-font capitalize-font mb-5">Payment Method:</span>
													<br>
													Visa ending **** 4242<br>
													jsmith@email.com
												</address>
											</div>
											<div class="col-xs-6 text-right">
												<address>
													<span class="txt-dark head-font capitalize-font mb-5">order date:</span><br>
													March 7, 2017<br><br>
												</address>
											</div>
										</div> -->

                    <!-- <div class="seprator-block"></div> -->

                    <div class="invoice-bill-table">
                        <div class="table-responsive">
                            <table id="myTable1" class="table table display pb-30">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tgl Transaksi</th>
                                        <th>No transaksi</th>
                                        <th>Supplier</th>
                                        <th>Nama barang</th>
                                        <th>Jumlah</th>
                                        <th>Pengirim Ekspedisi</th>
                                        <th>Penerima</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($transaksi_masuk as $transaksi_masuk)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $transaksi_masuk->tgl_transaksi}}</td>
                                        <td>{{ $transaksi_masuk->no_transaksi}}</td>
                                        <td>{{ $transaksi_masuk->nama_supplier}}</td>
                                        <td>{{ $transaksi_masuk->nama_barang}}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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

<!-- Footer -->
<footer class="footer container-fluid pl-30 pr-30">
    <div class="row">
        <div class="col-sm-12">
            <p>2017 &copy; Doodle. Pampered by Hencework</p>
        </div>
    </div>
</footer>
<!-- /Footer -->

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