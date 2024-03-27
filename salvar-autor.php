<?php
switch ($_REQUEST["acao"]) {
  case 'cadastrarau':
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    $sql = "INSERT INTO autor (nome, endereco, telefone, email)
      VALUES ('{$nome}', '{$endereco}', '{$telefone}', '{$email}')";

    $res = $conn->query($sql);

    break;

//interligando cada insert com uma variável, e os integrando com o blog//


  case 'editar':
    $nome = $_POST['Nome'];
    $endereco = $_POST['Endereco'];
    $telefone = $_POST['Telefone'];
    $email = $_POST['Email'];

    $sql = "UPDATE autor SET nome='{$nome}', endereco='{$endereco}', telefone='{$telefone}', email='{$email}' WHERE idautor=" . $_REQUEST['id'];

    $res =  $conn->query($sql);

    if ($res == true) {
      echo "<script>alert('Cadastro realizado com sucesso!');</script>";
      echo "<script>location.href='index.php';</script>";
    }
    break;

// dizendo que se escolhido editar o autor, ele irá mudar na lista e no blog//


  case 'excluir':
    $sql = "DELETE FROM autor WHERE idautor=" . $_REQUEST['id'];
    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Cadastro excluido com sucesso');</script>";
      print "<script>location.href='index.php';</script>";
    } else {
      print "<script>alert('Não foi possivel excluir');</script>";
      print "<script>location.href='index.php';</script>";
    }
    break;

// dizendo que se escolhido excluir o autor, após confirmado a pergunta de confirmação, ele irá excluír na 
//lista e no blog//

}
