<?php
switch ($_REQUEST["acao"]) {
  case 'cadastrar':
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $noticia = $_POST["noticia"];
    $imagem = $_POST["imagem"];

    $sql = "INSERT INTO noticias (titulo, subtitulo, noticia, imagem)
      VALUES ('{$titulo}', '{$subtitulo}', '{$noticia}', '{$imagem}')";

    $res = $conn->query($sql);
    break;

    //interligando cada insert com uma variável, e os integrando com o blog//


  case 'editar':
    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $noticia = $_POST["noticia"];
    $imagem = $_POST["imagem"];

    $sql = "UPDATE autor SET nome='{$titulo}', endereco='{$subtitulo}', telefone='{$noticias}', email='{$imagem}' WHERE idnoticias=" . $_REQUEST['id'];

    $res =  $conn->query($sql);

    if ($res == true) {
      echo "<script>alert('Cadastro realizado com sucesso!');</script>";
      echo "<script>location.href='index.php';</script>";
    }
    break;

    // dizendo que se escolhido editar a notícia, ele irá mudar na lista e no blog//

  case 'excluir':
    $sql = "DELETE FROM noticias WHERE idnoticias=" . $_REQUEST['id'];
    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Cadastro excluido com sucesso');</script>";
      print "<script>location.href='index.php';</script>";
    } else {
      print "<script>alert('Não foi possivel excluir');</script>";
      print "<script>location.href='index.php';</script>";
    }
    break;

    // dizendo que se escolhido excluir a notícia, após confirmado a pergunta de confirmação, ele irá excluír na 
    //lista e no blog//

}

