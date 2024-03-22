<link rel="stylesheet" href="style.css">

<?php 

  $sql = "SELECT * FROM autor WHERE idautor=" . $_REQUEST['id'];

  $res = $conn->query($sql);
  $row = $res->fetch_object();

?>


<div class="form">
  <h1>Cadastro de Autor</h1>
  <form action="?page=salvarau" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->idautor ?>">
      <label>Nome</label>
      <input type="text" name="nome" class="form-control" value="<?php echo $row->nome ?>">
      <br>
      <label>Endereco</label>
      <input type="text" name="endereco" class="form-control" value="<?php echo $row->endereco ?>">
      <br>
      <label>Telefone</label>
      <textarea type="text" name="telefone" class="form-control"> <?php echo $row->telefone ?></textarea>
      <br>
      <label>E-mail</label>
      <input type="text" name="email" class="form-control" value="<?php echo $row->email ?>">
      <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>