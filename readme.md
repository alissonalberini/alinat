<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

Po pup para se cadastrar para obter cupom de desconto;

Carrinhos(id, produto_id, cliente_id, quantidade, valor, timestamps);

As lista de produtos:
	Rows col-md-2;
	Ordenação: Relevância(+vendido, lançamento),data(lançamento),Nome,Preço,Promoção,estoque;
	Pesquisa: Nome, categoria, descrição;
	Filtros: Atributos ex: tamanho, cor, peso, marca, categoria;
	Modo visualização: troca o esquema de grade de 5x para 2x;

Produtos mostrar:
	Foto(mouse move zoom) principal, nome, preço, (estoque)

Detalhes do produto:
	Descrição todas as caracteristicas, avaliação, relacionados, sugeridos, e vistos recentemente;
	
CATEGORIAS(ID, DESCRICAO);

PRODUTOS(ID, DESCRICAO, PREÇO_ATACADO, PREÇO_VAREJO, ESTOQUE, VISIBILIDADE)
	PRODUTO_IMAGENS
	PRODUTO_CATEGORIAS
	PRODUTO_RELACIONADOS
	PRODUTO_CARACTERISTICAS (TEXTOS, DETALHES, CORES)
	PRODUTO_DIMENSOES	(ALTURA LARGURA, COMP, PESO, EMBALAGEM);

Clientes/Fornecedores
	Cliente_enderecos
	Cliente_cartoes
	
Carrinho|Pedido
	Pedido_Itens;
	
CUPONS(ID, DESC, %_DESC, VAL_DESC);

Configs
	Dados de configurações diversas, dados de api para integração, taxas etc...

	SERVIÇOS INTEGRADOS AIMPLEMENTAR:
	*CORREIOS
	*STRIPE
	*PAYPAL
	*PAGSEGURO
	*mailgun emails;
	*sms?;
	
	<div class="row gallery row text-center">
	<img class="card-img-top img-responsive thumbnail zoom" src="{{asset('imgs/c-1.PNG')}}" alt="caneca-dex"/>

	