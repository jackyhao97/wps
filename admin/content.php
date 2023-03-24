<?php require_once 'init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>WPS Admin</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	<!-- Viewer -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.2/viewer.min.css" rel="stylesheet">

	<!-- Lightbox -->
  <link rel="stylesheet" href="css/lightbox.css">

	<style>
		.my-gallery {
			cursor: pointer;
			margin-top: 15px;
		}

		.my-gallery figure {
			display: block;
			float: left;
			margin: 0 5px 5px 0;
			width: 120px;
			height: 150px;
			overflow: hidden;
			background-color: lightgray;
			text-align: center;
			line-height: 150px;
			font-weight: 500;
			color: white;
		}

		.my-gallery figure.figures {
			background-color: white !important;
			border: 1px solid #a29d9d;
			color: black !important;
		}
	</style>
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-tools"></i>
				</div>
				<div class="sidebar-brand-text mx-3">WPS Admin</div>
			</a>

			<!-- Heading -->
			<div class="sidebar-heading">
				Interface
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-cog"></i>
					<span>Home</span>
				</a>
				<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Custom Contents:</h6>
						<a class="collapse-item" href="slider.php">Slider</a>
						<a class="collapse-item active" href="content.php">Content</a>
					</div>
				</div>
			</li>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
					<i class="fas fa-fw fa-cog"></i>
					<span>Contents</span>
				</a>
				<div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Custom Contents:</h6>
						<a class="collapse-item" href="about.php">About</a>
						<a class="collapse-item" href="services.php">Service</a>
						<a class="collapse-item" href="clients.php">Clients</a>
						<a class="collapse-item" href="partners.php">Partners</a>
						<a class="collapse-item" href="contact.php">Contact</a>
						<a class="collapse-item" href="career.php">Career</a>
						<a class="collapse-item" href="testimonial.php">Testimonial</a>
					</div>
				</div>
			</li>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
					<i class="fas fa-fw fa-cog"></i>
					<span>News</span>
				</a>
				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">DETAIL NEWS</h6>
						<a class="collapse-item" href="category.php">Category</a>
						<a class="collapse-item" href="news.php">News</a>
						<a class="collapse-item" href="imagemanager.php">Image Manager</a>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
								<img class="img-profile rounded-circle" src="img/undraw_profile.svg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="profile.php">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Home - Content</h1>
					<p class="mb-4">
						<a target="_blank" href="https://widyapresisisolusi.com">widyapresisisolusi.com</a>.
					</p>

					<!-- DataTables Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3 d-flex justify-content-between">
							<h4 class="m-0 font-weight-bold text-primary">Content</h4>
							<button class="btn btn-success" onclick="checkAndClear()">Tambah</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="content-all" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>#</th>
											<th>Judul</th>
											<th>Keterangan</th>
											<th>Urutan</th>
											<th>Preview</th>
											<th>Aksi</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>

					<!-- Modal Tambah -->
					<div id="modal_tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title font-weight-bold">Tambah</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<form method="post" action="" class="form-horizontal" role="form" enctype="multipart/form-data" name="form_add" id="form_add">
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-md-12">
													<label class="col-md-2 col-sm-2 col-xs-4 control-label" for="txt_judul">Judul</label>
													<input class="form-control col-md-12 col-sm-8 col-xs-8 w-100" name="txt_judul" id="txt_judul" autofocus/>
												</div>
												<div class="col-md-12 mt-3">
													<label class="col-md-2 col-sm-2 col-xs-4 control-label" for="txt_keterangan">Keterangan</label>
													<textarea name="txt_keterangan" id="txt_keterangan" rows="4" cols="50" class="form-control"></textarea>
												</div>
												<div class="col-md-12 mt-3">
													<label class="col-md-2 col-sm-2 col-xs-4 control-label" for="txt_urutan">Urutan</label>
													<input class="form-control col-md-12 col-sm-8 col-xs-8 w-100" name="txt_urutan" id="txt_urutan" type="number"/>
												</div>
												<div class="col-md-12 mt-3">
													<label class="col-md-2 col-sm-2 col-xs-4 control-label">Image</label>
													<input type="file" name="fil_upload_content" id="fil_upload_content" data-filename-placement="inside" onchange="resizeAndRead(this)">
													<div class="col-md-8 col-sm-8 col-xs-8">
														<div class="my-gallery">
															<figure id="fil_upload_content_card">No Image</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button id="btn_simpan" type="button" class="btn btn-primary" name="btn_simpan" onclick="add()">Simpan</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
									</div>
								</form>
							</div>
						</div>
					</div>
        	<!-- Akhir Modal Tambah -->

					<!-- Modal Edit -->
					<div id="modal_edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title font-weight-bold">Edit</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<form method="post" action="" class="form-horizontal" role="form" enctype="multipart/form-data" name="form_edit" id="form_edit">
									<div class="modal-body">
										<div class="form-group">
											<div class="row">
												<div class="col-md-12">
													<label class="col-md-2 col-sm-2 col-xs-4 control-label" for="txt_judul_edit">Judul</label>
													<input class="form-control col-md-12 col-sm-8 col-xs-8 w-100" name="txt_judul_edit" id="txt_judul_edit" autofocus/>
													<input type="hidden" name="hid_id" id="hid_id">
												</div>
												<div class="col-md-12 mt-3">
													<label class="col-md-2 col-sm-2 col-xs-4 control-label" for="txt_keterangan_edit">Keterangan</label>
													<textarea name="txt_keterangan_edit" id="txt_keterangan_edit" rows="4" cols="50" class="form-control"></textarea>
												</div>
												<div class="col-md-12 mt-3">
													<label class="col-md-2 col-sm-2 col-xs-4 control-label" for="txt_urutan_edit">Urutan</label>
													<input class="form-control col-md-12 col-sm-8 col-xs-8 w-100" name="txt_urutan_edit" id="txt_urutan_edit" type="number" />
												</div>
												<div class="col-md-12 mt-3 d-flex align-items-center">
													<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
														<label class="control-label">Image</label>
													</div>
													<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
														<div class="my-gallery">
															<figure id="fil_upload_content_exist_card">No Image</figure>
														</div>
													</div>
												</div>
												<div class="col-md-12 mt-3">
													<input type="file" name="fil_upload_content_edit" id="fil_upload_content_edit" data-filename-placement="inside" onchange="resizeAndReadEdit(this)">
													<div class="col-md-8 col-sm-8 col-xs-8">
														<div class="my-gallery">
															<figure id="fil_upload_content_edit_card" class="figures">No Preview Available</figure>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button id="btn_simpan_edit" type="button" class="btn btn-primary" name="btn_simpan_edit" onclick="edit()">Simpan</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
									</div>
								</form>
							</div>
						</div>
					</div>
        	<!-- Akhir Modal Edit -->

					

				</div>
				<!-- /.container-fluid -->


			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Widya Presisi Solusi 2023.</span><br /><br />
						<span>Design By Hausada.</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="./logout.php">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Viewer -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.10.2/viewer.min.js"></script>

	<!-- Lightbox -->
	<script src="js/lightbox.js"></script>

	<!-- Page level custom scripts -->
	<script src="js/demo/datatables-demo.js"></script>

	<script src="js/script.js?ver=<?=rand(1,1000)?>"></script>

	<script>
		$("#modal_tambah").on("shown.bs.modal", function () {
			$("#txt_judul").focus();
		});

		$(document).ready(function() {
			$.fn.dataTable.ext.errMode = 'none';
	
			const table = $('#content-all').on('error.dt', function(e, settings, techNote, message) {
	
				if (techNote == 1)
	
				{
	
					alert('Your session timed out due to inactivity, you will logged off automatically. Please, click OK and sign in again.');
	
				} else
	
				{
	
					alert(message);
	
				}
	
			}).DataTable({
	
				"processing": true,
	
				"serverSide": true,
	
				"deferRender": true,
	
				"stateSave": true,
	
				"stateDuration": -1,
	
				"pageLength": 10,
	
				"ajax": {
	
					"url": "json/data-content.php",
	
				}
			});
			setInterval(function(){
				table.ajax.reload();
			}, 120000);  
		})

		const dataURLToBlob = function(dataURL) {
			let BASE64_MARKER = ';base64,';
			if (dataURL.indexOf(BASE64_MARKER) == -1) {
				let parts = dataURL.split(',');
				let contentType = parts[0].split(':')[1];
				let raw = parts[1];

				return new Blob([raw], {type: contentType});
			}

			let parts = dataURL.split(BASE64_MARKER);
			let contentType = parts[0].split(':')[1];
			let raw = window.atob(parts[1]);
			let rawLength = raw.length;

			let uInt8Array = new Uint8Array(rawLength);

			for (let i = 0; i < rawLength; ++i) {
				uInt8Array[i] = raw.charCodeAt(i);
			}

			return new Blob([uInt8Array], {type: contentType});
		}

		function clearForm() {
			$("#txt_judul").val('');
			$("#txt_keterangan").val('');
			$("#txt_urutan").val('');
			$("#fil_upload_content").val("");
			$("#fil_upload_content_preview").attr("src", "");
			$("#fil_upload_content_card").html('No Image');
		}

		function clearFormEdit() {
			$("#txt_judul_edit").val('');
			$("#txt_keterangan_edit").val('');
			$("#txt_urutan_edit").val('');
			$("#fil_upload_content_edit").val("");
			$("#fil_upload_content_exist_preview").attr("src", "");
			$("#fil_upload_content_edit_preview").attr("src", "");
			$("#fil_upload_content_edit_card").html('No Image');
		}

		function checkAndClear() {
			$.ajax({
				type: "post",
				url: "checkSession.php",
				success: (data) => {
					let res = JSON.parse(data);
					if (res.result == 1) {
						clearForm();
						$("#modal_tambah").modal('show');
					}
					else {
						window.location = './login.php';
					}
				},
				error: (err) => {
					alert("Terjadi kesalahan saat menampilkan modal. Silahkan coba lagi.");
					console.log(err);
				},
			});
		}

		window.imageResize = { blob: null, url: null }
		window.imageResizeEdit = { blob: null, url: null }

		function resizeAndRead(input){
			// Read
			if (input.files && input.files[0]) {
				const element = input.id;
				const reader = new FileReader();

				reader.onload = (e) => {
					$(`#${element}_card`).html(
						`<img class="file-card__image w-100" id="${element}_preview" src="${e.target.result}" />`
					);
				};
				reader.readAsDataURL(input.files[0]);
			}

			// Resize
			var file = event.target.files[0];

			if(file.type.match(/image.*/)) {
				var reader = new FileReader();
				reader.onload = function (readerEvent) {
					var image = new Image();
					image.onload = function (imageEvent) {
						var canvas = document.createElement('canvas'),
							max_size = 1280,// TODO : pull max size from a site config
							width = image.width,
							height = image.height;
						if (width > height) {
							if (width > max_size) {
								height *= max_size / width;
								width = max_size;
							}
						} else {
							if (height > max_size) {
								width *= max_size / height;
								height = max_size;
							}
						}
						canvas.width = width;
						canvas.height = height;
						canvas.getContext('2d').drawImage(image, 0, 0, width, height);
						var dataUrl = canvas.toDataURL('image/jpeg');
						imageResize.url = dataUrl;
						imageResize.blob = dataURLToBlob(dataUrl);
						console.log(imageResize);
					}
					image.src = readerEvent.target.result;
				}
				reader.readAsDataURL(file);
			}
			else {
				imageResize.url = 'not-an-image';
				imageResize.blob = 'not-an-image';
				alert('File bukan gambar! Mohon diganti');
			}
		};

		function resizeAndReadEdit(input){
			// Read
			if (input.files && input.files[0]) {
				const element = input.id;
				const reader = new FileReader();

				reader.onload = (e) => {
					$(`#${element}_card`).html(
						`<img class="file-card__image w-100" id="${element}_preview" src="${e.target.result}" />`
					);
				};
				reader.readAsDataURL(input.files[0]);
			}

			// Resize
			var file = event.target.files[0];

			if(file.type.match(/image.*/)) {
				var reader = new FileReader();
				reader.onload = function (readerEvent) {
					var image = new Image();
					image.onload = function (imageEvent) {
						var canvas = document.createElement('canvas'),
							max_size = 1280,// TODO : pull max size from a site config
							width = image.width,
							height = image.height;
						if (width > height) {
							if (width > max_size) {
								height *= max_size / width;
								width = max_size;
							}
						} else {
							if (height > max_size) {
								width *= max_size / height;
								height = max_size;
							}
						}
						canvas.width = width;
						canvas.height = height;
						canvas.getContext('2d').drawImage(image, 0, 0, width, height);
						var dataUrl = canvas.toDataURL('image/jpeg');
						imageResizeEdit.url = dataUrl;
						imageResizeEdit.blob = dataURLToBlob(dataUrl);
						console.log(imageResizeEdit);
					}
					image.src = readerEvent.target.result;
				}
				reader.readAsDataURL(file);
			}
			else {
				imageResizeEdit.url = 'not-an-image';
				imageResizeEdit.blob = 'not-an-image';
				alert('File bukan gambar! Mohon diganti');
			}
		};

		function add() {
			const formData = new FormData(document.getElementById("form_add"));
			$("#btn_simpan").attr("disabled", true).html('<i class="fa fa-spin fa-spinner"></i> Processing ...');
			
			if ($("#txt_judul").val() == ''){
				alert('Harap mengisi judul!');
				$("#btn_simpan").attr("disabled", false).html('Simpan');
			}
			else if ($("#txt_keterangan").val() == ''){
				alert('Harap mengisi keterangan!');
				$("#btn_simpan").attr("disabled", false).html('Simpan');
			}
			else if ($("#txt_urutan").val() == ''){
				alert('Harap mengisi urutan!');
				$("#btn_simpan").attr("disabled", false).html('Simpan');
			}
			else if (imageResize.blob == null || imageResize.url == null) {
				alert('Anda belum pilih gambar!');
				$("#btn_simpan").attr("disabled", false).html('Simpan');
			}
			else if (imageResize.url == 'not-an-image' || imageResize.blob == 'not-an-image') {
				alert('Yang anda upload bukan gambar!');
				$("#btn_simpan").attr("disabled", false).html('Simpan');
			}
			else {
				formData.append('image_data', imageResize.blob);
				$.ajax({
					type: "post",
					data: formData,
					url: "addContent.php",
					processData: false,
					contentType: false,
					success: (data) => {
						let res = $.parseJSON(data);
						if (res.result == 1) {
							alert(res.message);
							$("#content-all").DataTable().ajax.reload();
							$("#modal_tambah").modal("hide");
							$("#modal_tambah").attr("data-dismiss", "modal");
						}
						else {
							alert(res.message);
							$("#content-all").DataTable().ajax.reload();
						}
						$("#btn_simpan").attr("disabled", false).html('Simpan');
					},
					error: (err) => {
						alert("Terjadi kesalahan saat menyimpan data. Silahkan coba lagi.");
						console.log(err);
					},
				});
			}
		}

		function edit() {
			const formDataEdit = new FormData(document.getElementById("form_edit"));
			$("#btn_simpan_edit").attr("disabled", true).html('<i class="fa fa-spin fa-spinner"></i> Processing ...');
			
			if ($("#txt_judul_edit").val() == ''){
				alert('Harap mengisi judul!');
				$("#btn_simpan_edit").attr("disabled", false).html('Simpan');
			}
			else if ($("#txt_keterangan_edit").val() == ''){
				alert('Harap mengisi keterangan!');
				$("#btn_simpan_edit").attr("disabled", false).html('Simpan');
			}
			else if ($("#txt_urutan_edit").val() == ''){
				alert('Harap mengisi urutan!');
				$("#btn_simpan_edit").attr("disabled", false).html('Simpan');
			}
			else if (imageResizeEdit.url == 'not-an-image' || imageResizeEdit.blob == 'not-an-image') {
				alert('Yang anda upload bukan gambar!');
				$("#btn_simpan_edit").attr("disabled", false).html('Simpan');
			}
			else {
				formDataEdit.append('image_data_edit', imageResizeEdit.blob);
				$.ajax({
					type: "post",
					data: formDataEdit,
					url: "editContent.php",
					processData: false,
					contentType: false,
					success: (data) => {
						let res = $.parseJSON(data);
						if (res.result == 1) {
							alert(res.message);
							$("#content-all").DataTable().ajax.reload();
							$("#modal_edit").modal("hide");
							$("#modal_edit").attr("data-dismiss", "modal");
						}
						else {
							alert(res.message);
							$("#content-all").DataTable().ajax.reload();
						}
						$("#btn_simpan_edit").attr("disabled", false).html('Simpan');
					},
					error: (err) => {
						alert("Terjadi kesalahan saat menyimpan data. Silahkan coba lagi.");
						console.log(err);
					},
				});
			}
		}

		$(".my-gallery").on("click", function () {
			const image = new Image();
			const source = $(this).find("img").attr("src");

			if (source) {
				image.src = source;
				const viewer = new Viewer(image, {
					hidden: function () {
						viewer.destroy();
					},
				});

				viewer.show();
			}
		});

		lightbox.option({
			showImageNumberLabel: false,
			wrapAround: false,
		});

		function initHapus(id) {
			const conf = confirm(`Yakin untuk menghapus gambar ini?`);
			if (conf) {
				$.ajax({
					type: "post",
					url: "delContent.php",
					data: { id },
					success: (data) => {
						const res = $.parseJSON(data);

						if (res.success) {
							alert('Gambar berhasil dihapus.');
							$("#content-all").DataTable().ajax.reload();
						}
						else {
							alert('Gambar gagal dihapus.');
							$("#content-all").DataTable().ajax.reload();
						}
					}
				});
			}
		}

		function show(id) {
			clearFormEdit();
			$.ajax({
				type: "post",
				data: {id},
				url: "showContent.php",
				success: (data) => {
					let res = JSON.parse(data);
					if (res.success == 1) {
						$("#txt_judul_edit").val(res.data[0].judul);
						$("#txt_keterangan_edit").val(res.data[0].keterangan);
						$("#txt_urutan_edit").val(res.data[0].urutan);
						$("#hid_id").val(res.data[0].hid_id);
						$('#fil_upload_content_exist_card').html(
						`<img class="file-card__image w-100" id="fil_upload_content_exist_preview" src="${mainURL}content/${res.data[0].path}" />`
						);
					}
					else {
						alert("Tampil data error! Please Contact Administrator!");
					}
				},
				error: (err) => {
					alert("Terjadi kesalahan saat menampilkan data.");
					console.log(err);
				},
			});
		}
	</script>
</body>
</html>