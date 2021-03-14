
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Halaman @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Simple House</h1>
								<h6 class="tm-site-description">new restaurant template</h6>	
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="{{url('/')}}" class="tm-nav-link @yield('active1')">Home</a></li>
								<li class="tm-nav-li"><a href="{{url('tentang')}}" class="tm-nav-link @yield('active2')">About</a></li>
								<li class="tm-nav-li"><a href="{{url('kontak')}}" class="tm-nav-link @yield('active3')">Contact</a></li>
								<li class="tm-nav-li"><a href="{{url('Daftar_Barang')}}" class="tm-nav-link @yield('active4')">Barang</a></li>
								<li class="tm-nav-li"><a href="{{url('Daftar_Pelanggan')}}" class="tm-nav-link @yield('active5')">Pelanggan</a></li>
								<li class="tm-nav-li"><a href="{{url('Daftar_Pegawai')}}" class="tm-nav-link @yield('active6')">Pegawai</a></li>
								<li class="tm-nav-li"><a href="{{url('Daftar_Supplier')}}" class="tm-nav-link @yield('active7')">Supplier</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>
@yield('konten')
@include('layout.footer')