<?php
class noticias
{

    private int $idnoticia;
    private string $titulo;
    private string $subtitulo;
    private string $imagem;
    private string $created_at;
    private string $uptade_at;


    public function getIdnoticia()
    {
        return $this->idnoticia;
    }

    public function setIdnoticia($idnoticia)
    {
        $this->idnoticia = $idnoticia;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUptade_at()
    {
        return $this->uptade_at;
    }

    public function setUptade_at($uptade_at)
    {
        $this->uptade_at = $uptade_at;

        return $this;
    }
}
?>
<!-- criando o autor e tudo que estará inserido nele-->