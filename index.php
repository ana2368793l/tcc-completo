<?php
//PAGINA DE RECEPÇÃO DO USUÁRIO, Landing Page
include('config/config.php');
include('protecao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Venha conhecer tudo sobre Araguaína!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alexandria:wght@200;300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/index.css" media="screen"/>
</head>
<body>
<?php
 include('header.php');?>
</body>

<div class="container" style="width:60%">
    <h1 class="entry-title">10 pontos turísticos de Araguaína: Veja o que fazer na cidade</h3>
      <p class="subtitulo">Venha conhecer Araguaína - TO, a segunda maior cidade do estado estando atrás 
        somente da capital Palmas, conhecida popularmente pelo bordão “A capital econômica do Tocantins” ou 
        “A capital do boi gordo”.</p>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="fotos/vialago.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="fotos/cimba.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="fotos/cristo.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
<div class="container" style="width:60%">
  <p>Além de Araguaína se destacar nos aspectos comercial, educativo e de saúde, ela também se 
    sobressai no quesito de serviços, sendo considerada um dos melhores locais de oferecimento de 
    empregos, principalmente no agronegócio que é o carro chefe da cidade. Ademais, de acordo com 
    relatório da revista Exame, a cidade é uma das melhores do Brasil para negócios, destacando-se 
    no desenvolvimento econômico e ficando acima, inclusive, de grandes capitais, como Recife, Salvador 
    e Manaus.</p>
  <p>Tendo como a natureza seu maior atrativo turístico, principalmente no quesito hidrográfico, como praias, 
    cachoeiras e parques aquáticos, Araguaína também conta com restaurantes que servem comidas deliciosas 
    típicas da região com uma culinária amazônica e europeia. Outra excelente aposta para conhecer melhor a 
    cidade e seu povoado, que inclusive atrai milhares de pessoas todos os anos, são os eventos culturais 
    repletos da identidade do povo araguainense, como, por exemplo, a Cavalgada e Expoara. </p>
  <p>Enfim, Araguaína é a aposta perfeita para aqueles que desejam conhecer um lugar novo. Venha conhecer 
    um dos destinos mais surpreendentes do Tocantins!</p>
</div>
<div class="container" style="width:60%">
  <div class="squareIndice">
  <div class="indice">
      <h2>Turismo em Araguaína: navegue pelo site</h2>
      <a href="index.html#ir">• Quando ir em Araguaína?</a>
      <a href="index.html#chegando">• Como chegar em Araguaína</a>
      <a href="index.html#gastronomia">• Gastronomia de Araguaína</a>
      <a href="index.html#hospedagem">• Onde se hospedar em Araguaína</a>
      <a href="index.html#pontos">• Principais pontos turisticos de Araguaína</a>
</div>
</div>
</div>
<div class="container" style="width:60%">
  <h3>Quando ir em Araguaína?</h3>
  <p id="ir" class="teext">Em relação a quando especificamente ir à Araguaína, vale a pena 
    se programar para visitar a cidade na época de junho e julho devido, respectivamente, ao 
    período de maior ocorrência dos principais eventos artísticos e culturais do município e, 
    ao espaço de tempo conhecida popularmente como “época das praias”, isto é, a alta temporada 
    de praias que demonstra ser o melhor momento do ano para conhecer os principais rios do Tocantins
    e seus afluentes por conta do clima quente e seco</p>
    <p>Para quem desconhece a marca registrada de Araguaína que coincide com o evento mais aguardado do 
    ano pelos moradores locais, vale muitíssimo a pena conhecer a Maior Cavalgada do Mundo que ocorre 
    nas principais rodovias da cidade.</p>
    <p>A Cavalgada de Araguaína representa a força do campo, e a importância que o agronegócio tem no 
    Estado do Tocantins. Nesse evento é realizado um desfile com cavaleiros e amazonas em cavalos e bois, 
    com suas roupas características (camisa xadrez, chapéu e botas). Geralmente o desfile acontece no primeiro 
    domingo da EXPOARA (Exposição Agropecuária de Araguaína), e conta com aproximadamente 29 comitivas, tanto 
    de Araguaína quanto de cidades vizinhas. É a representação dos costumes e tradições do povo araguainense.</p>
    <p>Também há a época das praias no mês de julho que, em razão do clima quente, se torna o momento perfeito 
    para curtir as águas do Rio Araguaia e Tocantins. Por se tratar de uma época de alta temporada, ocorrem 
    vários eventos artísticos nas praias, como shows juntamente com bastante comida e bebida que é 
    comercializada por lá também. Um exemplo claro disso é a praia do Garimpinho de Araguaína, conhecida 
    por todos os moradores locais.</p>

  <h3>Como chegar em Araguaína</h3>
  <p id="chegando" class="teext">Araguaína fica na região entre os rios Lontra e Andorinhas e entre os rios 
  federais Araguaia e Tocantins, à distância de 393 km de Palmas, 1067 km de Brasília e de 1165 km de Goiânia.</p>
  <p>O município possui acessos por terra, pela rodovia federal BR-153 Belém-Brasília e, caso prefira viajar 
  de trem, há também o percurso feito pela Ferrovia Norte-Sul, e também dá para chegar por ar, pelo Aeroporto 
  Regional de Araguaína situado a 8 km do centro, que recebe voos esporádicos da Azul e atende ao norte do 
  Tocantins e ao sul dos estados vizinhos do Pará e Maranhão.</p>

  <h3>Gastronomia de Araguaína</h3>
  <p id="gastronomia" class="teext">Ao viajar para uma cidade nova, como Araguaína,
  é sempre importante ter indicação dos melhores locais para comer e elevar seu 
  conhecimento gastronômico. Por isso, há diversos locais em que o cardápio contém de tudo 
  e das melhores comidas que vcê possa gostar.</p>
  <p id="text">Por isso, indicamos esse guia com <a href="gastronomia.php" rel="next" id="texto">
  os 15 melhores locais para comer em Araguaína</a></p>

  <h3>Onde se hospedar em Araguaína</h3>
  <p id="hospedagem" class="teext">Em Araguaína você consegue encontrar uma grande variedade de hotéis e 
  pousadas concentradas no centro da cidade. As melhores áreas para ficar são as grandes avenidas centrais,
  especialmente a Bernardo Sayão, mas também a 1º de Janeiro, a Filadélfia e a Marginal Neblina. Com isso o 
  acesso a restaurantes, bares e mercados é fácil.</p>
  <p id="text">Para saber mais onde se hospedar, nós recomendamos esse guia com
  <a href="hospedagem.php" rel="next" id="texto">os melhores lugares para se hospedar em Araguaína</a></p>

  <h3>Principais pontos turistícos de Araguaína</h3>
  <p id="pontos" class="teext">Por mais que Araguaína seja uma cidade grande em sua região, não há muitos pontos turistícos porém nessa lista listamos os locais mais marcantes da cidade junto de sua localização no google maps para ser mais fácil de encontrar e um pouco sobre cada local.</p>

    <h4>Cristo Redentor</h4>
    <p>O monumento do Cristo Redentos concebido para ser um dos principais atrativos turísticos de Araguaína, exaltar a fé cristã e como uma tentativa de criar um elemento de identificação visual do município. Está instalado numa área alta, visível de vários pontos da cidade. A estátua fica próxima a BR-153 (Belém-Brasília) e pode ser avistada pelos viajantes que trafegam pela principal rota rodoviária que atravessa o município</p>
    <img src= fotos/cristo2.jpg id="fotovialago" alt="" style="width:80%;">

    <h4>Parque Cimba</h4>
    <p>O Eco Parque Cimba Benedito Vicente sempre foi uma referência na cidade desde 2015 por ser um espaço ideal para práticas esportivas e lazer da população. O local já foi palco de diversas confraternizações, festas, piqueniques, campeonatos, cerimônias de casamento e para eventos artísticos culturais da cidade como a Via Sacra e o Festival do São João do Cerrado (você pode encontrar mais sobre os parques <a href="praçaseparques.html" rel="next" id="texto">aqui</a>).</p>
    <p>Com as reformas de 2019, o local conta agora com aparelhos de ginástica e musculação para adultos e crianças nas academias ao ar livre e também com a preservação das ruínas de um patrimônio histórico da cidade que foi a primeira indústria de Araguaína e de todo o norte goiano, a Companhia Industrial e Mercantil da Bacia Amazônica (Cimba).</p>
    <img src= fotos/cimba2.jpeg id="fotovialago" alt="" style="width:80%;">
    <p>O local conta com duas pistas de mais de 1 km de extensão, sendo uma para ciclismo e outra para caminhada, utilizando mais de 6 km de asfalto em sua construção. Além disso, também há a presença de um lago nascente do Córrego Canindé, que, além de ser uma bela obra de paisagismo, também funciona como bacia de detenção para a água das chuvas.</p>
    
    <h4>Via Lago</h4>
    <p>Conhecida como o maior cartão postal de Araguaína, a Via Lago possui 1,84 km de extensão, começando na foz do Córrego Neblina (no cruzamento com a Avenida Filadélfia) seguindo até os setores Lago Azul, Cidade Nova e Nova Morada, com três pistas duplas, ciclovia e calçamento para pedestres.</p>
    <p>A avenida conta com luminárias de LED com rede subterrânea, áreas verdes, guarda-corpos e um calçadão com grafismos inspirados nos povos indígenas, especialmente os Karajá por conta do contexto histórico da cidade ligado a essa etnia.</p>
    <img src= fotos/vialago2.jpg id="fotovialago" alt="" style="width:80%;">
    <p>A Via Lago foi um grande marco na história de Araguaína, pois possibilitou à população araguainense uma extensa área de lazer, esportes e mobilidade urbana da região sul da cidade. O local dispõe em toda sua extensão o comércio de comidas e bebidas variadas, gerando emprego e movimentando a economia regional. Também há o oferecimento de alguns meios de transporte como, patinetes, bicicletas e pedalinhos, gerando entretenimento para a população.</p>
    <p>Ademais, desde a sua inauguração em 2017, a Via Lago é palco de diversos eventos culturais característicos da região como o desfile do 7 de Setembro, Revéillon, Vila Natalina, a celebração do Aniversário da Cidade, além de shows e festivais.</p>

    <h4>Praça São Luís Orione (Praça das Nações)</h4>
    <p>O local de lazer e turismo possui estrutura com bancos, mesas fixas e playground para as crianças, com espaços para feiras livres rotativas e paisagismo com arborização. No local são realizados diversos eventos tradicionais, como a Cantata e a Vila de Natal, além de eventos culturais.</p>
    <img src= fotos/praça.jpg id="fotovialago" alt="" style="width:80%;">

    <h4>Shopping Neblina Araguaína</h4>
    <p>O Shopping da região norte do Tocantins, sendo um centro comercial de compras e entretenimento contando com cinema e diferentes lojas para compras como a Americanas. Também chamada de Galeria, é um local agradável para encontro entre amigos e um momento de descontração entre família para relaxar de uma semana cansativa.  </p>
    <img src= fotos/shopping.jpg id="fotovialago" alt="" style="width:80%;">

    <h4>Cachoeira Véu das Noivas</h4>
    <p>Cachoeira do Véu da Noiva é uma das mais belas e famosas atrações turísticas de Araguaína.</p>
    <p>A 30 km do centro da cidade está a Cachoeira Véu de Noivas, um dos principais pontos turísticos do município que chega a receber, em média, 250 pessoas nos finais de semana mais movimentados. Essa queda d’água de mais de 26 metros de altura atrai milhares de amantes do ecoturismo, atividade turística que utiliza, de forma sustentável, o patrimônio natural e cultural</p>
    <img src= fotos/cachoeira.jpg id="fotovialago" alt="" style="width:80%;">
    <p>No local, as belezas naturais se misturam às construções erguidas para receber os turistas. Os visitantes pagam uma taxa de contribuição ao entrar na propriedade, e esse valor é destinado às manutenções e melhorias do complexo. O lugar oferece bar, restaurante de comidas típicas e apartamentos. Além disso, conta com área para camping, piscinas naturais e espaço para diversos eventos.</p>
    <P>Além disso, na região da cachoeira, onde o verde impressiona pela exuberância em toda a sua extensão, também é possível outros atrativos além de banhos, como passeio ecoturístico pelo meio da mata, conhecendo uma grande variedade de árvores centenárias como o pau brasil, ipês, jatobá, copaíba, palmeiras nativas, além de animais silvestres, como macaco de diversas espécies, gato do mato, caititu, cotia, paca, pássaros, dentre outros animais.</P>

    <h4>Park Aquático 3J</h4>
    <p>O Park aquático 3J é uma excelente opção de lazer para o povo araguainense por causa de suas belezas naturais e comida deliciosa típica da culinária indigena, baseado principalmente em pescados, por conta da importante bacia hidrográfica da região e, frutos do cerrado.</p>
    <p>Localizados ao sul de Araguaína, o 3J oferece uma ampla área de lazer com quiosques, churrasqueiras, piscinas adulto e infantil, diversos toboáguas, brinquedos aquáticos, restaurante e estacionamento para a diversão do povo araguainense.</p>
    <img src= fotos/park.jpg id="fotovialago" alt="" style="width:80%;">
    <p>Para momentos de descanso e confraternização em contato com a natureza, aposte em conhecer o 3J.</p>

    <h4>Mirandão</h4>
    <p>O Estádio Leôncio de Souza Miranda, popularmente conhecido como Mirandão, é um estádio de futebol brasileiro, localizado na cidade de Araguaína, no estado do Tocantins. O nome do estádio homenagea o ex-prefeito de Tupirama, Leôncio de Souza Miranda.</p>
    <p>Possui capacidade para dez mil espectadores é o segundo maior estádio do Tocantins, perdendo somente para o Nilton Santos da capital Palmas. Em sua construção, foram investidos 22,9 milhões de reais. É utilizado pelo Araguaína Futebol e Regatas para o mando de seus jogos.</p>
    <img src= fotos/mirandao.jpg id="fotovialago" alt="" style="width:80%;">
    <p>O Estádio Mirandão foi inaugurado no dia 7 de fevereiro de 2009, com o confronto entre Araguaína e Goiás. As festividades de inauguração iniciaram às 18 horas, com o descerramento da placa pelo governador Marcelo Miranda. Meia hora mais tarde, ocorreu um jogo preliminar entre veteranos de Araguaína e Amigos do Governador, que terminou empatada em 1 a 1. Às 19 horas, foi realizada a partida principal.</p>
    <img src= fotos/mirandao2.jpg id="fotovialago" alt="" style="width:80%;">
    <p>O mirandão possui arquibancada parcialmente coberta, estacionamento com capacidade para duas mil vagas, portão de acesso de veículos ao campo, dois vestiários completos para times (contendo uma área para troca de roupa com armário e uma área de aquecimento com piso sintético), vestiários para a arbitragem (masculino e feminino), seis cabines de rádio e TV interligadas diretamente com o campo, ala privativa com tribuna de honra, área de alimentação e sanitários para o público em geral (dois masculinos e dois femininos), posto policial e médico (com áreas privativas para ambulância), acessos por rampas laterais e duas bilheterias frontais. Também é o primeiro estádio tocantinense a dispôr de um placar eletrônico.</p>

    <h4>Parque das Águas</h4>
    <p>Outro ponto turístico bastante frequentado de Araguaína é o Parque das Águas Jacuba. Popularmente conhecido pelos moradores da cidade como Balneário Jacuba, o parque fica localizado na saída leste de Araguaína e é perfeito para se refrescar com a família em meio ao intenso calor de Araguaína</p>
    <p>O lugar tem uma estrutura que conta com cabanas, churrasqueiras, piscinas infantis, playgrounds, quadras, aparelhos de ginástica, pista de cooper, vestiários, estacionamento, posto médico, além de lanchonete, bar e restaurante.</p>
    <img src= fotos/parque.jpg id="fotovialago" alt="" style="width:80%;">
    <p>Formado pelas águas do Córrego Jacuba, o balneário é dotado de uma beleza inigualável, onde as águas calmas e limpas do lago são ideais para se refrescar ou praticar esportes como a canoagem</p>

    <h4>Mercado Municipal de Araguaína</h4>
    <p>O Mercado Municipal foi fundado em 1978, período em que o município de Araguaína ainda pertencia ao Estado de Goiás e, desde sua criação se consolidou como um espaço importante na cidade, atraindo centenas de pessoas todos os dias em busca dos frutos nativos do cerrado e da amazônia, como  buriti, pequi, açaí, bacaba e outros, além de hortaliças, farinhas, cereais e também não menos procurado, os pratos típicos da região, com destaque para a panelada e o  chambari, além de fornecer a geração de renda para as famílias dos feirantes.</p>
    <img src= fotos/mercado.jpg id="fotovialago" alt="" style="width:80%;">
    <p>Atualmente, cerca de 300 comerciantes trabalham no Mercado Municipal de Araguaína em diversas áreas, como açougues, peixarias, fabricação e venda de queijos, comércio de frutas, verduras, entre outros produtos naturais, além dos proprietários de restaurantes que atuam na praça de alimentação.</p>
    <p>Com isso, visitar o Mercado Municipal de Araguaína é uma excelente maneira de conhecer a cultura e gastronomia araguainense.</p>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    </html>
  
</body>

