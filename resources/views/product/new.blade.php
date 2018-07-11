@extends("layouts.master")

@section("css")

@endsection

@section("content")

<!-- Page Content -->


<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Produto</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Produto</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                January 2018
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Export List</a>
                                <a class="dropdown-item" href="#">Policies</a>
                                <a class="dropdown-item" href="#">View Assets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue">Default Basic Forms</h4>
                        <p class="mb-30 font-14">All bootstrap element classies</p>
                    </div>
                    <div class="pull-right">
                        <a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
                    </div>
                </div>
                <form>
                    @if(isset($reg))
                    <input type="hidden" id="id"  name="id" value="{{ $reg->id }}"/>
                    @endif

                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                    <div class="form-group ">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control disabled" id="name" name="name" maxlength="191"
                               value="{{ !isset($reg) ? '' : $reg->name }}" placeholder="nome" required="">
                    </div>

                    <div class="form-group ">
                        <label for="nome">Unity</label>
                        <input type="text" class="form-control disabled" id="unity" name="unity" maxlength="191"
                               value="{{ !isset($reg) ? '' : $reg->unity }}" placeholder="umidade" required="">
                    </div>

                    <div class="form-group ">
                        <label for="nome">Preço de compra</label>
                        <input type="number" class="form-control disabled" id="purchase_price" name="purchase_price" maxlength="191"
                               value="{{ !isset($reg) ? '' : $reg->purchase_price }}" placeholder="valor de compra" required="">
                    </div>

                    <div class="form-group ">
                        <label for="nome">preço de venda</label>
                        <input type="text" class="form-control disabled" id="sale_price" name="sale_price" maxlength="191"
                               value="{{ !isset($reg) ? '' : $reg->sale_price }}" placeholder="preço de venda" required="">
                    </div>

                    <button type="submit" class="btn btn-primary glyphicon glyphicon-floppy-disk"> Salvar </button>
                    <button type="reset" onClick="history.go(-1);return true;" class="btn btn-danger glyphicon glyphicon-arrow-left"> Cancelar </button>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- /.container -->

@endsection
