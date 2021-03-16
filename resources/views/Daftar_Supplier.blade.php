@extends('layout.header')
@section('konten')
@section('title')
    Tentang
@endsection
@section('active7')
	active
@endsection
<main>
	<header class="row tm-welcome-section">
		<h2 class="col-12 text-center tm-section-title">DAFTAR SUPPLIER</h2>
	</header>

	<div class="tm-container-inner tm-persons">
		<div class="row">
			@foreach($liat as $li)
			<article class="col-lg-6">
				<figure class="tm-person">
					<img src="{{$li->image}}" style="max-width: 30%" alt="Image" class="img-fluid tm-person-img" />
					<figcaption class="tm-person-description">
						<h4 class="tm-person-name">{{$li->nama}}</h4>
						<p class="tm-person-title">{{$li->deskripsi}}</p>
						<p class="tm-person-about">{{$li->alamat}}</p>				
					</figcaption>
				</figure>
			</article>
			@endforeach
		</div>
	</div>
</main>
@endsection