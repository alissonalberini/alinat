Olá usamos Laravel!
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

*Requisitos*:
    PHP >= 7.1.3
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension
    Ctype PHP Extension
    JSON PHP Extension
    Mysql or MariaDB >= last version stable;

-------------------

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

-------------------

*Features*

    Dado inicio ao projeto recentemente, sinta-se a vontade de contribuir.
    Idéia: experiência para um e-commerce!

Visualização de produtos:
    Em cards, com nome, imagem e preço preço de oferta, disponibilidade, com ordenação*, e zoom*
    Ordenação: Relevância(+vendido, lançamento),data(lançamento),Nome,Preço,Promoção,estoque;
    Pesquisa: Nome, categoria, descrição;
    Filtros: Atributos ex: tamanho, cor, peso, marca, categoria;
    Zoom: (mouse move zoom)

Detalhes do produto:
    Vistos recentemente;

Popup's: 
    Pedindo para se cadastrar;
    Para obter cupom de desconto;
    Para obter ofertas do dia;

Carrinho de compra:
    (user_cliente_id, produto_id, quantidade, valor_ato_compra, timestamps);

-------------------

Estrutura de tabelas (using migrations);
	
    CATEGORIAS;
    ESTADOS;
    CIDADES;
    EMPRESA*;
    Pessoa: Clientes/Fornecedores;
        Pessoa_enderecos;
        Pessoa_cartoes;

    PRODUTOS(ID, DESCRICAO, PREÇO_ATACADO, PREÇO_VAREJO, ESTOQUE, VISIBILIDADE)
        PRODUTO_IMAGENS
        PRODUTO_CATEGORIAS
        PRODUTO_RELACIONADOS
        PRODUTO_CARACTERISTICAS (TEXTOS, DETALHES, CORES)
        PRODUTO_DIMENSOES	(ALTURA LARGURA, COMP, PESO, EMBALAGEM);

    Carrinho|Pedido
        Pedido_Itens;
        (id, produto_id, cliente_id, quantidade, valor, timestamps);

    CUPONS(ID, DESC, %_DESC, VAL_DESC);

-------------------

TODO's NOW!:

    *Produtos: descrição e opções
    Páginas de erro, adicionar nas execções
    Produtos, obrigatório ao menos 1 imagem, tratar se existe
    Carrinho de compras
    Determinar Tamanho/resolução/formatos de imagens que serão aceitos.

    Decisões importantes:
        Produtos: um produto poderá possuir mais de uma categoria?
        SubCategorias: categorias, terão subcategorias?
        Se sim: Criar em categorias a opção de categorias pai, e ordenação;
     
        
    Adicionar em produto(s):
        ProdutoRatings = seria o(s) comentários e avaliações dos compradores;
            nota de avaliação de 0 a 10 ou de 1 a 5 estrelas;
            somente uma avaliação por compra por produtor or usuário;
            Avaliações sem sentido\ofenças etc, são banidas e ocultas, 
            e o usuário que a fez deverá ser notificado
        rating/avaliação = dentro de produto mesmo, média das avaliações.

    Em detalhes de produto:
        Aba para mostrar a(s) avaliações;

TODO's resolvidas:


*Configs*
    Dados de configurações diversas, dados de api para integração, taxas etc...

-------------------

*SERVIÇOS INTEGRADOS AIMPLEMENTAR:*
    *CORREIOS
    *STRIPE
    *PAYPAL
    *PAGSEGURO
    *mailgun emails;
    *sms?;


<div class="row gallery row text-center">
<img class="card-img-top img-responsive thumbnail zoom" src="{{asset('imgs/c-1.PNG')}}" alt="caneca-dex"/>