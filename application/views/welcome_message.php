<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Dashboard 2</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo base_url() . "assets/" ?>plugins/fontawesome-free/css/all.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url() . "assets/" ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() . "assets/" ?>dist/css/adminlte.min.css">
	<style>
		.pagination {
			flex-direction: row-reverse;
		}

		div#example1_filter {
			display: flex;
			flex-direction: row-reverse;
		}
	</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index3.html" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>


		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index3.html" class="brand-link">
				<img src="<?php echo base_url() . "assets/" ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">AdminLTE 3</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?php echo base_url() . "assets/" ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Alexander Pierce</a>
					</div>
				</div>

				<!-- SidebarSearch Form -->
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
						<li class="nav-item menu-open">
							<a href="#" class="nav-link active">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="/rest" class="nav-link active">
										<i class="far fa-circle nav-icon"></i>
										<p>User List</p>
									</a>
								</li>
								<!-- <li class="nav-item">
									<a href="./index2.html" class="nav-link active">
										<i class="far fa-circle nav-icon"></i>
										<p>Dashboard v2</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="./index3.html" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Dashboard v3</p>
									</a>
								</li> -->
							</ul>
						</li>

					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Dashboard v2</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Dashboard v2</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<!-- NOTE data table -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">DataTable with default features</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Description(s)</th>
										<th>Created_at</th>

									</tr>
								</thead>
								<tbody id="data-list">
									<!-- <tr>
										<td>Trident</td>
										<td>Internet
											Explorer 4.0
										</td>
										<td>Win 95+</td>
										<td> 4</td>

									</tr> -->
								</tbody>
								<tfoot>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Description(s)</th>
										<th>Created_at</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>



					<!-- /.row -->
				</div>
				<!--/. container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.1.0-rc
			</div>
		</footer>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
	<!-- jQuery -->
	<script src="<?php echo base_url() . "assets/" ?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() . "assets/" ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?php echo base_url() . "assets/" ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url() . "assets/" ?>dist/js/adminlte.js"></script>

	<!-- PAGE PLUGINS -->
	<!-- jQuery Mapael -->
	<!-- DataTables  & Plugins -->
	<script src="<?php echo base_url() . "assets/" ?>plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/jszip/jszip.min.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/pdfmake/pdfmake.min.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/pdfmake/vfs_fonts.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="<?php echo base_url() . "assets/" ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url() . "assets/" ?>dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url() . "assets/" ?>dist/js/pages/dashboard2.js"></script>
	<script>
		$(function() {
			// $("#example1").DataTable({
			// 	"paging": true,
			// 	"lengthChange": true,
			// 	"searching": true,
			// 	"ordering": true,
			// 	"info": true,
			// 	"autoWidth": false,
			// 	"responsive": true,
			// 	"processing": true,
			// 	"serverSide": true,
			// 	// "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
			// 	"ajax": {
			// 		// "url": "http://localhost:5000/rest/index.php/api/item",
			// 		"url": "<?php echo site_url() ?>/api/item",
			// 		"dataSrc": ""
			// 	},

			// 	"columns": [{
			// 			"data": "id"
			// 		},
			// 		{
			// 			"data": "title"
			// 		},
			// 		{
			// 			"data": "description"
			// 		},
			// 		{
			// 			"data": "created_at"
			// 		}

			// 	]

			// })
			// .buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
			// $.ajax({
			// 	"url": "http://localhost:5000/rest/index.php/api/item",
			// 	type: 'get',
			// 	dataType: 'json',
			// 	success: function(result) {
			// 		console.log(result)
			// 		let daftar = result;
			// 		var html = '';
			// 		$.each(daftar, function(i, data) {
			// 			html += `<tr>
			// 						<td>` + data.id + `</td>
			//                         <td> `+ data.title + `</td>
			//                         <td>` + data.description + `</td>
			//                         <td>` + data.created_at + `</td>
			//                      </tr>`;

			// 			//This is selector of my <tbody> in my table
			// 			$("#data-list").html(html);
			// 			// console.log(html)
			// 		});
			// 	}

			// })
			var base_url = "<?php echo site_url(); ?>"; 
			$('#example1').DataTable({
				"pageLength": 10,
				"serverSide": true,
				"order": [
					[0, "asc"]
				],
				"ajax": {
					url: base_url + '/welcome/datatable',
					type: 'POST'
				},
			});
		});
	</script>
</body>

</html>