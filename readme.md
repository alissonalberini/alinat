<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


Requisitos:
	PHP >= 7.1.3
	OpenSSL PHP Extension
	PDO PHP Extension
	Mbstring PHP Extension
	Tokenizer PHP Extension
	XML PHP Extension
	Ctype PHP Extension
	JSON PHP Extension

	Mysql >= 5.7


Instalação:
	Clone o projeto no seu diretório específico:
		git clone https://github.com/alissonalberini/alinat.git

		Crie o .env ou copie e renomeie o .env.example

		Crie um banco de dados com o nome: alinat_db

		Informe no seu .env os dados do banco de dados


	Entre no diretório do projeto pelo terminal:

		Instalar dependencias: composer install
		Generar chave do projeto: php artisan key:generate
		Criar tabelas no banco de dados: php artisan migrate
		Inserir dados de teste: php artisan seed


	Pronto, se tudo ocorreu bem!

		iniciar o servidor: php artisan serve



--- Dado inicio ao projeto recentemente, sinta-se a vontade de contribuir.

--- A ideia do projeto é melhorar a esperiência do cliente final, em visualizar seus 	produtos, de acordo com seu interesse, sendo a melhor esperiência do mundo!


--- Quando este paradigma estiver aceitável, estaremos evoluindo para um e-commerce!


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

	