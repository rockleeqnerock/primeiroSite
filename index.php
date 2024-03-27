<?php
//require_once('noticias.php');
//$news = new noticias();

//$news->setTitulo("Gamba é resgatado pelo IAT em Pitanga");
///$news->setSubtitulo("Técnicos do IAT resgatam gambá ferido em Pitanga. O animal foi encontrado com a perna quebrada
//por
//agentes do Corpo de bombeiros,na cidade localizada na região central do estado do Paraná");
//$news->setImagem("https://www.aen.pr.gov.br/sites/default/arquivos_restritos/files/imagem/2024-02/gamba_1_iat.jpg");


//$news1 = new noticias();
//$news1->setTitulo("Ração para quem tem fome: ação distribuirá alimentação para animais resgatados");
//$news1->setSubtitulo("O projeto ‘Ração para quem tem fome’ será lançado pela Secretaria Municipal de Meio Ambiente
//(SMMA) e o Ministério Público de Minas Gerais (MPMG).");
//$news1->setImagem("https://www.otempo.com.br/image/contentid/policy:1.3335232:1708558274/racao-para-quem-tem-fome-jpg.jpg?f=3x2&w=1224");

/////$news2 = new noticias();
//$news2->setTitulo("CSP aprova projeto que criminaliza agressões a animais usados por policiais");
//$news2->setSubtitulo("A Comissão de Segurança Pública (CSP) aprovou projeto de lei para criar a Lei de Proteção a
//Animais Policiaisou Militares, que cria crimes e sanções civis a agressores desses animais.");
//$news2->setImagem("https://static.vecteezy.com/ti/fotos-gratis/p1/28250300-policial-com-droga-cheirando-cachorro-as-a-aeroporto-ou-trem-estacao-costumes-ou-policia-bagagem-inspecao-e-imigracao-ao-controle-sobre-chegada-policia-cachorro-farejador-cachorro-generativo-ai-foto.jpeg");

//$news3 = new noticias();
//$news3->setTitulo("Projeto que resgata e abriga animais de rua realiza campanha para construir abrigo");
//$news3->setSubtitulo("Instituição já tem o terreno e agora conta com ajuda dos simpatizantes da causa animal para
//arrecadar os itens necessários.");
//$news3->setImagem("https://s2-g1.glbimg.com/Yabq40188FaSqiprrlWoOClpoj0=/0x0:1600x1507/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2024/m/V/cS8UA6TF6buky4b1H04Q/whatsapp-image-2024-02-19-at-16.06.48.jpeg");

//$news4 = new noticias();
//$news4->setTitulo(" Fim do acorrentamento em Hortolândia");
//$news4->setSubtitulo("A luta pela proteção animal ganha mais um aliado em Hortolândia com a aprovação do Projeto de
//Lei nº 94/2023");
//$news4->setImagem("https://portalhortolandia.com.br/wp-content/uploads/2024/02/cachorro-preso.jpg");

?>
<?php
include("config.php");
$sql = "SELECT * FROM noticias";
$res = $conn->query($sql);

?>
<!--puxando as informações do blog para serem mostradas no site logo depois-->
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
        <a href="?page=lista">LISTA NOTÍCIA</a>
        <a href="?page=autor">NOVO AUTOR</a>
        <a href="?page=listaau">LISTA AUTOR</a>
    </nav>

    <!-- criando 'botões' que levam para acada uma das abas acima citadas -->

    <?php

    switch (@$_REQUEST['page']) {
        case "novo":
            include("nova-noticia.php");
            break;
        case "salvar":
            include("salvar-noticia.php");
            break;
        case "lista":
            include("listar-noticia.php");
            break;
        case 'editar':
            include('editar-noticia.php');
            break;


        case 'autor':
            include('novo-autor.php');
            break;
        case "salvarau":
            include("salvar-autor.php");
            break;
        case "listaau":
            include("listar-autor.php");
            break;
        case 'editarau':
            include('editar-autor.php');
            break;
        default:
    ?>

            <!-- direcionando cada ação para sua respctiva página apartir dos nomes na url-->

            <h1>NOTÍCIA NOTÍCIA NOTÍCIA</h1>

            <!-- criando um título para o site-->

            <div class="hidden">
                <section id="noticia" class="container">


                    <!-- criando uma seção "noticia" para todas as notícias e uma classe "container" 
                    para o container referente a todas as notícias-->


                    <?php while ($row = $res->fetch_object()) { ?>
                        <div class="noticia2">
                            <article>

                                <h2><?php echo $row->titulo; ?></h2>

                                <!-- sincronizando com as informações anteriormente carregadas do blog 
                                (comentário da linha 43), mostrando o título-->

                                <h3><?php echo $row->subTitulo; ?></h3>

                                <!-- sincronizando com as informações anteriormente carregadas do blog 
                                (comentário da linha 43), mostrando o subtítulo-->

                                <img src="<?php echo $row->imagem; ?>" alt="Gambá está em tratamento no CAFS de Guarapuava" width="300px" height="150px">

                                <!-- sincronizando com as informações anteriormente carregadas do blog 
                                (comentário da linha 43), mostrando a imagem-->

                                <nav class="nav2">
                                    <a href="noticia.php/?id=<?php echo $row->idnoticias; ?>">MOSTRAR MAIS</a>
                                    <!-- adicionando um botão "mostrar mais" que leva para notícia completa-->
                                </nav>
                            </article>
                        </div>
                    <?php } ?>


                </section>
            </div>
            <section id="sobre">

            </section>
            <section id="contato">

                <nav class="navsobre">
                    <a href="sobre.html">SOBRE E CONTATO</a>
                </nav>

                <!-- criando um botão que leva a seção, em outra página, de sobre e contato-->

            </section>
    <?php } ?>

    <!-- fechando php da parte que direciona para abas pra que, caso nenhuma das páginas 
    seja aberta, mostre a página principal que esta sendo criada acima-->

    <script src="scripts.js"></script>
</body>

</html>