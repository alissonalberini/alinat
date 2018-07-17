@extends("layouts.app")

@section("css")

<!-- bootstrap-tagsinput css -->
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">

@endsection

@section("content")

<div class="container">

    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Produtos</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/index.php">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Inicio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            @if(Session('filters'))
            <div class="mb-30">
                <h5>Filstros selecionados</h5>
                <input type="text" value="{{ Session('filters') }}" data-role="tagsinput">
            </div>
            @endif

            <div class="col-lg-12 my-3">
                <h5>Ordenação</h5>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active btn-outline-success" href="#">Ordenação padrão<span class="fas fa-sort-amount-down"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?sortBy=name">Nome: de A a Z<span class="fas fa-sort-alpha-up"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?sortBy=created_at">Lançamentoss <span class="fas fa-sort"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?sortBy=sale_price">Preço: menor para o maior<span class="fas fa-sort-numeric-up"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?sortByDesc=sale_price">Preço: maior para o menor<span class="fas fa-sort-numeric-down"></a>
                    </li>
                </ul>
            </div>

            <div class="product-wrap">
                <div class="product-list">
                    <ul class="row">

                        @forelse($products as $product)
                        
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
                        @empty
                            <p>Não encontrados resultados para a pesquisa ou filtro</p>
                        @endforelse

                        {{ $products->links() }}

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section("scripts")
<!-- bootstrap-tagsinput js -->
<script src="{{ asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>

@endsection