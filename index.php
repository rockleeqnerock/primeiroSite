<?php
require_once('noticias.php');
$news = new noticias();

$news->setTitulo("Gamba é resgatado pelo IAT em Pitanga");
$news->setSubtitulo("Técnicos do IAT resgatam gambá ferido em Pitanga. O animal foi encontrado com a perna quebrada
por
agentes do Corpo de bombeiros,na cidade localizada na região central do estado do Paraná");
$news->setImagem("https://www.aen.pr.gov.br/sites/default/arquivos_restritos/files/imagem/2024-02/gamba_1_iat.jpg");


$news1 = new noticias();
$news1->setTitulo("Ração para quem tem fome: ação distribuirá alimentação para animais resgatados");
$news1->setSubtitulo("O projeto ‘Ração para quem tem fome’ será lançado pela Secretaria Municipal de Meio Ambiente
(SMMA) e o Ministério Público de Minas Gerais (MPMG).");
$news1->setImagem("https://www.otempo.com.br/image/contentid/policy:1.3335232:1708558274/racao-para-quem-tem-fome-jpg.jpg?f=3x2&w=1224");

$news2 = new noticias();
$news2->setTitulo("CSP aprova projeto que criminaliza agressões a animais usados por policiais");
$news2->setSubtitulo("A Comissão de Segurança Pública (CSP) aprovou projeto de lei para criar a Lei de Proteção a
Animais Policiaisou Militares, que cria crimes e sanções civis a agressores desses animais.");
$news2->setImagem("https://static.vecteezy.com/ti/fotos-gratis/p1/28250300-policial-com-droga-cheirando-cachorro-as-a-aeroporto-ou-trem-estacao-costumes-ou-policia-bagagem-inspecao-e-imigracao-ao-controle-sobre-chegada-policia-cachorro-farejador-cachorro-generativo-ai-foto.jpeg");

$news3 = new noticias();
$news3->setTitulo("Projeto que resgata e abriga animais de rua realiza campanha para construir abrigo");
$news3->setSubtitulo("Instituição já tem o terreno e agora conta com ajuda dos simpatizantes da causa animal para
arrecadar os itens necessários.");
$news3-> setImagem("https://s2-g1.glbimg.com/Yabq40188FaSqiprrlWoOClpoj0=/0x0:1600x1507/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2024/m/V/cS8UA6TF6buky4b1H04Q/whatsapp-image-2024-02-19-at-16.06.48.jpeg");

$news4 = new noticias();
$news4 ->setTitulo(" Fim do acorrentamento em Hortolândia");
$news4->setSubtitulo("A luta pela proteção animal ganha mais um aliado em Hortolândia com a aprovação do Projeto de
Lei nº 94/2023");
$news4-> setImagem("https://portalhortolandia.com.br/wp-content/uploads/2024/02/cachorro-preso.jpg");


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>notícia notícia notícia</title>
</head>
<!--linkando ao css-->

<body>
    <nav class="nav">
        <a href="index.php">HOME</a>
        <a href="#noticia">NOTÍCIAS</a>
        <a href="#sobre">SOBRE E CONTATO</a>
        <a href="?page=novo">NOVA NOTÍCIA</a>
        <a href="#">LISTA NOTICIAS</a>
    </nav>

<?php 
include("config.php");
switch(@$_REQUEST["page"]){
case "novo":
    include("nova-noticia.php");
    break;
 case "listar":
    include("listar-noticia.php");
    break;
 case "salvar":
    include("salvar-noticia.php");
    break;
 default:
?>

<!--chamando tudo que precisa pra conseguir adicionar a notícia ao banco de dados-->

    <!-- fazendo a aba de navegação que leva as notícias, sobre e contato-->
    <h1>NOTÍCIA NOTÍCIA NOTÍCIA</h1>
    <!-- criando um título para o site-->
    <div class="hidden">
        <section id="noticia" class="container">
            <div class="noticia2">

                <!-- criando uma seção "noticia" para todas as notícias e uma classe "container"-->
                <!-- criando uma classe para o container referente a todas as notícias-->
                <article>
                    <!-- criando uma "sub-seção" para cada notícia específica-->
                    <h2><?php echo $news->getTitulo();?></h2>
                    <!-- criando um título para cada notícia-->
                    <h3><?php echo $news->getSubtitulo();?>
                    </h3>
                    <!-- criando um subtítulo para cada notícia-->
                    <img src="<?php echo $news->getImagem();?>" alt="Gambá está em tratamento no CAFS de Guarapuava" width="300px" height="150px">
                    <!-- adicionando uma imagem referente a notícia-->
                    <nav class="nav2">
                        <a href="noticias/noticia1.html">MOSTRAR MAIS</a>
                    </nav>
                </article>
                <!-- adicionando um nav para inserir um botão "mostrar mais" que leva para notícia completa-->
            </div>

            <div class="noticia2">

                <article>
                    <h2><?php echo $news1->getTitulo();?></h2>

                    <h3><?php echo $news1->getSubtitulo();?>
                    </h3>
                    <img src="<?php echo $news1->getImagem();?>"
                        alt="Ação vai distribuir, por um ano, alimentação para animais resgatados e cuidados por protetores e associações da capital mineira e cidades da região metropolitana"
                        width="300px" height="150px">
                    <nav class="nav2">
                        <a href="noticias/noticia2.html">MOSTRAR MAIS</a>
                    </nav>

                </article>
            </div>

            <div class="noticia2">
                <article>
                    <h2><?php echo $news2->getTitulo();?></h2>

                    <h3><?php echo $news2->getSubtitulo();?>
                    </h3>
                    <img src="<?php echo $news2->getImagem();?>"
                        alt="Cão farejador da recebe afago de Nelsinho Trad durante reunião na qual foram aprovados direitos de animais policiais."
                        width="300px" height="150px">
                    <nav class="nav2">
                        <a href="noticias/noticia3.html">MOSTRAR MAIS</a>
                    </nav>
                </article>
            </div>

            <div class="noticia2">
                <article>
                    <h2><?php echo $news3->getTitulo();?></</h2>

                    <h3><?php echo $news3->getSubtitulo();?></h3>
                    <img src="<?php echo $news3->getImagem();?>"
                        alt="gatinho resgatado" width="150px" height="150px">
                    <nav class="nav2">
                        <a href="noticias/noticia4.html">MOSTRAR MAIS</a>
                    </nav>
                </article>
            </div>

            <div class="noticia2">
                <article>
                    <h2><?php echo $news4->getTitulo();?></h2>

                    <h3><?php echo $news4->getSubtitulo();?></h3>

                    <img src="<?php echo $news4->getImagem();?>"
                        alt="doginho acorrentado" width="300px" height="150px">
                    <nav class="nav2">
                        <a href="noticias/noticia5.html">MOSTRAR MAIS</a>
                    </nav>
                </article>

        </section>
    </div>
    <section id="sobre">
        <!-- adicionando uma aba sobre para o site-->
    </section>
    <section id="contato">
        <!-- criando um aba de contato para o site-->
        <nav class="navsobre">
            <a href="noticias/sobre.html">SOBRE E CONTATO</a>
        </nav>
        <!-- criando um botão que leva a seção, em outra página, de sobre e contato-->

    </section>
<?php } ?>
    <script src="scripts.js"></script>
</body>

</html>