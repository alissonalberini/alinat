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
                            <h4>Carrinho</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Seu carinho de compras</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<h4 class="mb-20">Produtos em seu carrinho</h4>
						<div class="notification-list mx-h-450 customscroll">
							<ul>
                                @foreach($itens as $item)
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset("imgs") . "/" . isset($item->img) }}" alt="">
                                            <h3 class="clearfix">{{ isset($item->nome) }}<span>{{ isset($item->valor) }}</span></h3>
                                            <p>{{ isset($item->qtde) }}</p>
                                        </a>
                                    </li>
                                @endforeach
							</ul>
						</div>
					</div>
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
    $("input[class='demo3_22']").TouchSpin({
        initval: 1
    });
});
</script>

@endsection