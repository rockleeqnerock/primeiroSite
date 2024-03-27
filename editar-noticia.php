<link rel="stylesheet" href="style.css">

<?php

$sql = "SELECT * FROM noticias WHERE idnoticias=" . $_REQUEST['id'];

$res = $conn->query($sql);
$row = $res->fetch_object();

?>


<div class="form">
  <h1>Cadastro de Noticia</h1>
  <form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->idnoticias ?>">
    <label>Titulo</label>
    <input type="text" name="titulo" class="form-control" value="<?php echo $row->titulo ?>">
    <br>
    <label>SubTitulo</label>
    <input type="text" name="subtitulo" class="form-control" value="<?php echo $row->subTitulo ?>">
    <br>
    <label>Noticia</label>
    <textarea type="text" name="noticia" class="form-control"> <?php echo $row->noticia ?></textarea>
    <br>
    <label>Caminho da Imagem</label>
    <input type="text" name="image" class="form-control" value="<?php echo $row->imagem ?>">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  <!--criando uma aba de edição das informações da notícia que será ativada ou clicar em 'editar' na lista-->
</div>