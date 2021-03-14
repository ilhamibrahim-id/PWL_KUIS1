@extends('layout.header')
@section('konten')
@section('title')
    Daftar Pegawai
@endsection
@section('active6')
	active
@endsection
<main>
	<header class="row tm-welcome-section">
		<h2 class="col-12 text-center tm-section-title">Data Pegawai Yang Kami Miliki</h2>
	</header>

	<div class="tm-container-inner tm-persons">
		<div class="row">
			@foreach($liat as $li)
			<article class="col-lg-6">
				<figure class="tm-person">
					<img src="{{$li->image}}" alt="Image" class="img-fluid tm-person-img" width="300px" />
					<figcaption class="tm-person-description">
						<hr>
						<h4 class="tm-person-name">{{$li->title}}</h4>
						<p class="tm-person-title">{{$li->slug}}</p>
						<hr>
						<p class="tm-person-about">{{$li->content}}</p>
						<div>
							<a href="https://fb.com" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
							<a href="https://twitter.com" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
							<a href="https://instagram.com" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
						</div>
					</figcaption>
				</figure>
			</article>
			@endforeach
		</div>
	</div>
</main>
@endsection