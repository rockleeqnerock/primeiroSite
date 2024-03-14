<link rel="stylesheet" href="style.css">



<form action="?page=salvar" method="post" class="form">
    <!--dizendo que a ação será salvar a pagina-->
    <input type="hidden" name="acao" value="cadastrar">
<label for="title">Titulo</label>
<input type="text" id="title" name="titulo" class="input">

<label for="subtitle">Subtítulo</label>
<input type="text" id="subtitle" name="subtitulo" class="input">
<br>

<label for="autor">Autor</label>
<input type="text" id="autor" name="nome-autor" class="input">

<label for="image">Imagem</label>
<input type="text" id="image" name="imagem" class="input">
<br>
<br>
<br>

<label for="notice" >Notícia:</label>
<br>

<textarea name="noticia" id="image" cols="60" rows="30" class="input2"></textarea>
<br>

<input type="submit" value="Enviar" class="enviar">

</form>
<!-- criando o fotmulário de nova notícia-->