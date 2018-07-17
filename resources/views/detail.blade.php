@extends("layouts.app")

@section("css")

<!-- Slick Slider css -->
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick/slick.css') }}">
<!-- bootstrap-touchspin css -->
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}">

@endsection

@section("content")

<div class="container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Detalhes</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detalhes do produto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="product-wrap">
                <div class="product-detail-wrap mb-30">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="product-slider slider-arrow">

                                @foreach($product->images as $image)
                                <div class="product-slide">
                                    <img src="{{ asset("imgs") . "/" . $image->file }}" alt="">
                                </div>
                                @endforeach
                            </div>
                            <div class="product-slider-nav">
                                @foreach($product->images as $image)
                                <div class="product-slide-nav">
                                    <img src="{{asset("imgs") . "/" .$image->file}}" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="product-detail-desc pd-20 bg-white border-radius-4 box-shadow height-100-p">
                                <h4 class="mb-20 pt-20">{{ $product->name }}</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <div class="price">
                                    <del>$55.5</del><ins>{{ $product->sale_price }}</ins>
                                </div>
                                <div class="mx-w-150">
                                    <div class="form-group">
                                        <label class="text-blue">Quantidade</label>
                                        <input id="demo3_22" type="text" value="1" name="demo3_22">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <a href="/addcart/{{ $product->id }}" class="btn btn-primary btn-block">Adicionar ao Carrinho</a>
                                    </div>
                                    <div class="col-md-6 col-6">
                                        <a href="/comprar/{{ $product->id }}" class="btn btn-outline-primary btn-block">Comprar agora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container pd-0">
                    <div class="timeline mb-30">
                        <h4 class="mb-10">Avaliações do produto</h4>
                        <ul>
                            @foreach($product->ratings as $rating)
                            <li>
                                <div class="timeline-date">
                                    {{ $rating->created_at }}
                                    {{ $rating->rating }}
                                </div>
                                <div class="timeline-desc bg-white border-radius-4 box-shadow">
                                    <div class="pd-20">
                                        <h4 class="mb-10">{{ $rating->title }}</h4>
                                        <p>{{ $rating->description }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <h4 class="mb-20">Produtos similares</h4>

                <div class="product-list">
                    <ul class="row">

                        @foreach($product->similars as $product)

                        <li class="col-lg-3 col-md-6 col-sm-12">
                            <div class="product-box">
                                <div class="producct-img"><img src="{{asset("imgs") . "/" .$product->images[0]->file}}" alt="caneca-dex"></div>
                                <div class="product-caption">
                                    <h4><a href="#">{{ $product->name }}</a></h4>
                                    <div class="price">
                                        <del>$55.5</del><ins>{{ $product->sale_price }}</ins>
                                    </div>
                                    <a href="/detalhes/{{ $product->id }}" class="btn btn-outline-primary">Detalhes</a>
                                    <a href="/addcart/{{ $product->id }}" class="btn btn-outline-success">Comprar</a>
                                </div>
                            </div>
                        </li>

                        @endforeach

                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection


@section("scripts")

<!-- Slick Slider js -->
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<!-- bootstrap-touchspin js -->
<script src="{{ asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}"></script>

<script>
jQuery(document).ready(function () {
    jQuery('.product-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        infinite: true,
        speed: 1000,
        fade: true,
        asNavFor: '.product-slider-nav'
    });
    jQuery('.product-slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.product-slider',
        dots: false,
        infinite: true,
        arrows: false,
        speed: 1000,
        centerMode: true,
        focusOnSelect: true
    });
    $("input[name='demo3_22']").TouchSpin({
        initval: 1
    });
});
</script>

@endsection