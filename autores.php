<?php
class autor
{
    private int $id;
    private string $nome;
    private string $endereço;
    private string $telefone;
    private string $email;



    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }


    public function getEndereço()
    {
        return $this->endereço;
    }


    public function setEndereço($endereço)
    {
        $this->endereço = $endereço;

        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
?>
<!-- criando o autor e tudo que estará inserido nele-->