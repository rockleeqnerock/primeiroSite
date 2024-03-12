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
$news2->setImagem("data:image/jpeg;base64,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");




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
        <a href="index.html">HOME</a>
        <a href="#noticia">NOTÍCIAS</a>
        <a href="#sobre">SOBRE E CONTATO</a>


    </nav>
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
                    <h2>Projeto que resgata e abriga animais de rua realiza campanha para construir abrigo</h2>

                    <h3>Instituição já tem o terreno e agora conta com ajuda dos simpatizantes da causa animal para
                        arrecadar os
                        itens necessários.
                    </h3>
                    <img src="https://s2-g1.glbimg.com/Yabq40188FaSqiprrlWoOClpoj0=/0x0:1600x1507/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2024/m/V/cS8UA6TF6buky4b1H04Q/whatsapp-image-2024-02-19-at-16.06.48.jpeg"
                        alt="gatinho resgatado" width="150px" height="150px">
                    <nav class="nav2">
                        <a href="noticias/noticia4.html">MOSTRAR MAIS</a>
                    </nav>
                </article>
            </div>

            <div class="noticia2">
                <article>
                    <h2> Fim do acorrentamento em Hortolândia</h2>

                    <h3>A luta pela proteção animal ganha mais um aliado em Hortolândia com a aprovação do Projeto de
                        Lei nº
                        94/2023</h3>

                    <img src="https://portalhortolandia.com.br/wp-content/uploads/2024/02/cachorro-preso.jpg"
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

    <script src="scripts.js"></script>
</body>

</html>