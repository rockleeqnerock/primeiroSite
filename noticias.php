<?php
class noticias{

    private int $idnoticia;
    private string $titulo;
    private string $subtitulo;
    private string $imagem;
    private string $created_at;
    private string $uptade_at;


    


    /**
     * Get the value of idnoticia
     */ 
    public function getIdnoticia()
    {
        return $this->idnoticia;
    }

    /**
     * Set the value of idnoticia
     *
     * @return  self
     */ 
    public function setIdnoticia($idnoticia)
    {
        $this->idnoticia = $idnoticia;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of subtitulo
     */ 
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    /**
     * Set the value of subtitulo
     *
     * @return  self
     */ 
    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    /**
     * Get the value of imagem
     */ 
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     *
     * @return  self
     */ 
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of uptade_at
     */ 
    public function getUptade_at()
    {
        return $this->uptade_at;
    }

    /**
     * Set the value of uptade_at
     *
     * @return  self
     */ 
    public function setUptade_at($uptade_at)
    {
        $this->uptade_at = $uptade_at;

        return $this;
    }



   
}
?>