@extends("layouts.app")

@section("css")

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
									<li class="breadcrumb-item active" aria-current="page">Product</li>
								</ol>
							</nav>
						</div>
					</div>
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
