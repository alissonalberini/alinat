@extends("layouts.app")

@section("css")
<style>
    /**THE SAME CSS IS USED IN ALL 3 DEMOS**/    
    /**gallery margins**/  
    /*    div.gallery{    
            margin-left: 3vw;
            margin-right:3vw;
        }    */

    .zoom {      
        -webkit-transition: all 0.35s ease-in-out;    
        -moz-transition: all 0.35s ease-in-out;    
        transition: all 0.35s ease-in-out;     
        cursor: -webkit-zoom-in;      
        cursor: -moz-zoom-in;      
        cursor: zoom-in;  
    }     

    .zoom:hover,  
    .zoom:active,   
    .zoom:focus {
        /**adjust scale to desired size, 
        add browser prefixes**/
        -ms-transform: scale(1.8);    
        -moz-transform: scale(1.8);  
        -webkit-transform: scale(1.8);
        -o-transform: scale(1.8);
        transform: scale(1.8);
        position:relative;      
        z-index:100;
        margin-left: 3vw;
        margin-right:3vw;
    }

    /**To keep upscaled images visible on mobile, 
    increase left & right margins a bit**/  
    @media only screen and (max-width: 768px) {   
        div.gallery {    
            margin-left: 15vw;       
            margin-right: 15vw;
        }

        /**TIP: Easy escape for touch screens,
        give gallery"s parent container a cursor: pointer.**/
        .DivName {cursor: pointer}
    }
</style>
@endsection

@section("content")

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-3">
        <h1 class="display-3">Olá Bem vindo!</h1>
        <p class="lead">Aqui vão as novidades, promoções e lançamentos.</p>
        <p class="lead">Cadastre-se e ganhe desconto.</p>
        <a href="#" class="btn btn-primary btn-lg">$Desconto!</a>
    </header>

    <div class="col-lg-12 my-3">
        <ul class="nav">
            <li class="nav-item">
                <form class="form-inline">
                    <input class="form-control mr-sm-1" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Relevantes<span class="fas fa-sort-amount-down"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Nome<span class="fas fa-sort-alpha-up"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Data <span class="fas fa-sort"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Preço <span class="fas fa-sort-numeric-up"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled <span class="fas fa-sort"></a></li>
        </ul>
    </div>

    <!-- Page Features -->
    <div class="row text-center gallery">

        @foreach ($produtos as $produto)

        <div class="col-lg-3 col-md-6 mb-4 sm-2">
            <div class="card">
                <img class="card-img-top img-responsive thumbnail zoom" src="{{asset("imgs/c-1.PNG")}}" alt="caneca-dex"/>
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>
       

        <div class="col-lg-3 col-md-6 mb-4 sm-2">
            <div class="card">
                <img class="card-img-top img-responsive thumbnail zoom" src="{{asset("imgs/c-2.PNG")}}" alt="caneca-dex"/>
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top img-responsive thumbnail zoom" src="{{asset("imgs/c-3.PNG")}}" alt="caneca-dex"/>
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top img-responsive thumbnail zoom" src="{{asset("imgs/c-4.PNG")}}" alt="caneca-dex"/>
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Find Out More!</a>
                </div>
            </div>
        </div>

        @endforeach



    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@endsection
