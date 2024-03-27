<?php 
include("config.php");
$sql = "SELECT * FROM noticias WHERE idnoticias=" . $_REQUEST['id'];

// puxando as informaçõesdo blog e separando cada notícia pelo id do blog para podermos usar para mostrar na
// aba principal //

$res = $conn->query($sql);
$row = $res->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">

    <!-- linkando esta e todas as notícias com o css-->

    <title>Document</title>
</head>
<body>
    <div class="not">
        <h2><?php echo $row->titulo;?></h2>
        <h3><?php echo $row->subTitulo;?></h3>
        <p><?php echo $row->noticia;?></p>
        <img src="<?php echo $row->imagem;?>"
            alt="Gambá está em tratamento no CAFS de Guarapuava" width="450px" height="250px">

<!-- linkando cada informação pra onde ela tem que ir -->

    </div>
</body>

</html>