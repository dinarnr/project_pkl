@extends('layout.master')
@section('title', 'Data Transaksi')
@section('content')

<!-- Main Content -->
<div class="page-wrapper">
	<div class="container-fluid">

		<!-- Title -->
		<div class="row heading-bg">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
				<h5 class="txt-dark">tambah barang keluar</h5>
			</div>
			<!-- Breadcrumb -->
			<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
				<ol class="breadcrumb">
					<!-- <li><a href="index.html">master data</a></li> -->
					<li><a href="#"><span>transaksi</span></a></li>
					<li class="active"><span>tambah barang keluar</span></li>
				</ol>
			</div>
			<!-- /Breadcrumb -->
		</div>
		<!-- /Title -->

		<!-- Row -->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="form-wrap">
										<form action="#">
											<div class="form-body">
												<!-- <h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
															<hr class="light-grey-hr"/> -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">No. Transaksi</label>
															<input type="text" id="no_transaksi" class="form-control" placeholder="No. Transaksi">
															<!-- <span class="help-block"> This is inline help </span>  -->
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Barang</label>
															<input type="text" id="barang" class="form-control" placeholder="Pilih Barang">
															<!-- <span class="help-block"> This field has error. </span>  -->
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Tanggal Keluar</label>
															<input type="date" class="form-control" placeholder="dd/mm/yyyy">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Jumlah Keluar</label>
															<input type="text" class="form-control" placeholder="">
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- /Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Supplier</label>
															<select class="form-control">
																<option>--Pilih Supplier--</option>
																<option value="Category 1">Laila</option>
																<option value="Category 2">Dinar</option>
																<option value="Category 3">Hadafi</option>
																<option value="Category 4">Lutfi</option>
															</select>
														</div>
													</div>
													<!--/span-->
													<div class="row">
														<div class="col-md-6">
															<div class="form-group">
																<label class="control-label mb-10">Pengirim</label>
																<input type="text" class="form-control" placeholder="">
															</div>
														</div>
														<!--/span-->

														<div class="form-actions mt-10">
															<button type="submit" class="btn btn-primary ">+ Tambah Data</button>
														</div>
														<!--/span-->
													</div>
													<!-- /Row -->


													<!-- /Row -->

												</div>

										</form>
									</div>
								</div>
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