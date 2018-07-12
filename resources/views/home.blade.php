@extends("layouts.app")

@section("css")

<!-- bootstrap-tagsinput css -->
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
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
                            <h4>Product</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Produtos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Selecine filtros à vontade!</label>
                <select class="custom-select2 form-control" multiple="multiple" style="width: 100%;">
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                    </optgroup>
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                    </optgroup>
                </select>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label>multiple Select</label>
                    <select class="selectpicker form-control" data-style="btn-outline-secondary" multiple data-max-options="3">
                        <optgroup label="Condiments">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </optgroup>
                        <optgroup label="Breads">
                            <option>Plain</option>
                            <option>Steamed</option>
                            <option>Toasted</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="mb-30">
                <h5>Input Value</h5>
                <p class="font-14">add <code>data-role="tagsinput"</code> to your input element.</p>
                <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput">
            </div>
            <div class="mb-30">
                <h5>Select Value</h5>
                <p class="font-14">add <code>data-role="tagsinput"</code> to your select element & use select multiple</p>
                <select multiple data-role="tagsinput">
                    <option value="Amsterdam">Amsterdam</option>
                    <option value="Washington">Washington</option>
                    <option value="Sydney">Sydney</option>
                    <option value="Beijing">Beijing</option>
                    <option value="Cairo">Cairo</option>
                </select>
            </div>
            <div class="mb-30">
                <h5>Input placeholder</h5>
                <p class="font-14">add <code>data-role="tagsinput" placeholder="add tags"</code> to your input element.</p>
                <input type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput" placeholder="add tags">
            </div>

            <div class="col-lg-12 my-3">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active btn-outline-success" href="#">Relevantes<span class="fas fa-sort-amount-down"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nome<span class="fas fa-sort-alpha-up"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data <span class="fas fa-sort"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Preço <span class="fas fa-sort-numeric-up"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Indisponível <span class="fas fa-sort"></a></li>
                </ul>
            </div>

            <div class="product-wrap">
                <div class="product-list">
                    <ul class="row">

                        @foreach($products as $product)

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

                        {{ $products->links() }}

                    </ul>
                </div>

                <div class="blog-pagination mb-30">
                    <div class="btn-toolbar justify-content-center mb-15">
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-primary prev"><i class="fa fa-angle-double-left"></i></a>
                            <span class="btn btn-primary current">1</span>
                            <a href="#" class="btn btn-outline-primary">2</a>
                            <a href="#" class="btn btn-outline-primary">3</a>
                            <a href="#" class="btn btn-outline-primary next"><i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section("scripts")
<!-- bootstrap-tagsinput js -->
<script src="{{ asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>
<!-- bootstrap-touchspin js -->
<script src="{{ asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}"></script>

<script>
// Switchery
var elems = Array.prototype.slice.call(document.querySelectorAll('.switch-btn'));
$('.switch-btn').each(function () {
    new Switchery($(this)[0], $(this).data());
});

// Bootstrap Touchspin
$("input[name='demo_vertical2']").TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'fa fa-plus',
    verticaldownclass: 'fa fa-minus'
});
$("input[name='demo3']").TouchSpin();
$("input[name='demo1']").TouchSpin({
    min: 0,
    max: 100,
    step: 0.1,
    decimals: 2,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '%'
});
$("input[name='demo2']").TouchSpin({
    min: -1000000000,
    max: 1000000000,
    stepinterval: 50,
    maxboostedstep: 10000000,
    prefix: '$'
});
$("input[name='demo3_22']").TouchSpin({
    initval: 40
});
$("input[name='demo5']").TouchSpin({
    prefix: "pre",
    postfix: "post"
});
</script>

@endsection