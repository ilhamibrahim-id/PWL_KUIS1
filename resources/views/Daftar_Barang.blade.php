@extends('layout.header')
@section('konten')
@section('title')
    Menu Daftar Barang
@endsection
@section('active4')
active
@endsection
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">DAFTAR BARANG</h2>
    </header>

    <!-- Gallery -->
    <div class="row tm-gallery">
        <!-- gallery page 1 -->
        <div id="tm-gallery-page-pizza" class="tm-gallery-page">
            @foreach($liat as $li)
            <article class="col-lg-4 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{$li->image}}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title"></h4>
                        <hr>
                        <p style="text-align:center">{{$li->title}}</p>
                        <hr>
                        <p class="tm-gallery-description">{{$li->content}}</p>
                        <p class="tm-gallery-price" style="text-align:center">Rp.{{$li->harga}}.00,-</p>
                    </figcaption>
                </figure>
            </article>
            @endforeach
        </div>
</main>
@endsection