<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
      $titulo = $_POST["titulo"];
      $subtitulo = $_POST["subtitulo"];
      $noticia = $_POST["noticia"];
      $imagem = $_POST["imagem"];

    //interligando cada insert com uma variável//
  
      $sql = "INSERT INTO noticias (titulo, subtitulo, noticia, imagem)
      VALUES ('{$titulo}', '{$subtitulo}', '{$noticia}', '{$imagem}')";
  
      $res = $conn->query($sql);
      break;
  
    case 'editar':
      break;
    case 'excluir':
      break;
  }

 //mandando o que foi escrito em cada insert para sua aba referente no banco de dados//
?>  