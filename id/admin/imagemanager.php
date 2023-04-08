<?php 
	require_once 'init.php'; 
	date_default_timezone_set('Asia/Jakarta');
?>
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

		.ck-editor__editable_inline {
			min-height: 300px;
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
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Custom Contents:</h6>
						<a class="collapse-item" href="slider.php">Slider</a>
						<a class="collapse-item" href="content.php">Content</a>
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
						<a class="collapse-item" href="news.php">News</a>
						<a class="collapse-item" href="contact.php">Contact</a>
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
				<div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">DETAIL NEWS</h6>
						<a class="collapse-item" href="banner.php">Banner</a>
						<!-- <a class="collapse-item" href="category.php">Category</a> -->
						<a class="collapse-item" href="news.php">News</a>
						<a class="collapse-item active" href="imagemanager.php">Image Manager</a>
					</div>
				</div>
			</li>

			<!-- Nav Item - Careers -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
					<i class="fas fa-fw fa-newspaper"></i>
					<span>Careers</span>
				</a>
				<div id="collapseFive" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Detail Careers</h6>
						<a class="collapse-item" href="career.php">For WPS</a>
						<a class="collapse-item" href="careerClients.php">For Clients</a>
					</div>
				</div>
      </li>

			<!-- Nav Item - Users -->
      <li class="nav-item">
        <a class="nav-link" href="users.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Users</span></a>
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
					<h1 class="h3 mb-2 text-gray-800">Image Manager</h1>
					<p class="mb-4">
						<a target="_blank" href="https://widyapresisisolusi.com">widyapresisisolusi.com</a>.
					</p>

					<!-- DataTables Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3 d-flex justify-content-between">
							<h4 class="m-0 font-weight-bold text-primary">Image Manager</h4>
						</div>
						<div class="card-body">
							<form class="form-image p-3" method="post" action="javascript:image.handleUpload()" enctype="multipart/form-data">
								<div class="form-group">
									<label class="col-md-2 col-sm-2 col-xs-12">Upload Gambar</label>
									<div class="col-md-6 col-sm-6 col-xs-12"><input type="file" name="image" accept="image/*" /></div>
								</div>
								<button type="submit" name="upload" id="upload" class="btn btn-success">Upload</button>
							</form>
							<div class="container">
								<div class="row file-container"></div>
							</div>
						</div>
					</div>
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

	<script src="js/script.js"></script>

	<script>
		const image = {
			fetchImg: function() {
					$.ajax({
							type:'get',
							url:'news/get-news-images.php',
							success: (result) => {
									const res = $.parseJSON(result)
									this.generateCard(res.data)
							},
							error: (err) => console.error(err.message)
					})
			},
			generateCard: function(datas, mode="append") {
					if (datas.length > 0) {
							let temp = ''
							datas.map(data => {
									temp = 
									`<div class="col-12 col-sm-6 col-md-4 card-container">
										<div class="file-card card shadow mb-4" id="${data.key}">
											<img class="file-card__image w-100" src="${data.path}" alt="${data.filename}" />
											<div class="file-card__path p-3">
												${data.path}
											</div>
											<div class="file-card__actions card-footer text-right">
												<i class="fa fa-link mr-3" style="cursor:pointer" onclick="image.copyLink('${data.key}')">Link</i>
												<i class="fa fa-trash" style="cursor:pointer" onclick="image.handleDelete('${data.key}', '${data.filename}')">Delete</i>
											</div>
										</div>
									</div>`
								if (mode.toLowerCase() === "prepend")
										$('.file-container').prepend(temp)
								else
									$('.file-container').append(temp)
							})
					}
			},
			removeItem: (key) => {
					if (key) {
							if ($(`#${key}`).length > 0) {
								$(`#${key}`).closest('.card-container').remove()
							}
					}
			},
			handleDelete: function (key, filename) {
					let conf = confirm(`Yakin untuk menghapus gambar ${filename}?`)
					
					if (conf) {
							$.ajax({
									type:'post',
									data:{file: filename},
									url: 'news/delete-news-image.php',
									success: (res) => this.removeItem(key),
									error: (err) => console.error(err.message)
							})
					}
			},
			handleUpload: function() {
					const files = $('input[type=file]')[0].files
					if (files.length > 0) {
							let fd = new FormData()
							fd.append('file', files[0])
							
							$('#upload').prop('disabled', true).val('Uploading...')
							
							$.ajax({
									type:'POST',
									url: 'news/upload-news-image.php',
									data: fd,
									processData: false,
									contentType: false,
									cache: false,
									success: (result) => {
											const res = $.parseJSON(result)
											this.generateCard(res.data, 'prepend')
											$('input[type=file]').val('')
											$('#upload').prop('disabled', false).val('Upload')
									},
									error: (err) => {
											$('#upload').prop('disabled', false).val('Upload')
											console.error(err.message)
									}
							})
					} else {
							alert('Please select a file to upload.')
					}
			},
			copyLink: (key) => {
					if (key) {
							const link = $(`#${key}`).find('img').attr('src')
							navigator.clipboard.writeText(link).then(function() {
											alert('Copied to clipboard!')
									}, function(err) {
											console.error('Could not copy text: ', err.message)
									})
					}
			}
		}

		image.fetchImg()
	</script>
</body>
</html>