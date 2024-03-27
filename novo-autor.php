<link rel="stylesheet" href="style.css">



<form action="?page=salvarau" method="post" class="form">
    <!--dizendo que a ação será salvar a pagina-->
    <input type="hidden" name="acao" value="cadastrarau">
    <label for="name">Nome</label>
    <input type="text" id="name" name="nome" class="input">

    <label for="endereco">Endereço</label>
    <input type="text" id="endereco" name="endereco" class="input">
    <br>

    <label for="telefone">Telefone</label>
    <input type="text" id="telefone" name="telefone" class="input">

    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" class="input">
    <br>
    <br>
    <br>
    <input type="submit" value="Enviar" class="enviar">

</form>
<!-- criando o fotmulário de novo autor -->