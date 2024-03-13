<?php
class autor{
private int $id;
private string $nome;
private string $endereço;
private string $telefone;
private string $email;


/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
}

/**
 * Set the value of id
 *
 * @return  self
 */ 
public function setId($id)
{
$this->id = $id;

return $this;
}

/**
 * Get the value of nome
 */ 
public function getNome()
{
return $this->nome;
}

/**
 * Set the value of nome
 *
 * @return  self
 */ 
public function setNome($nome)
{
$this->nome = $nome;

return $this;
}

/**
 * Get the value of endereço
 */ 
public function getEndereço()
{
return $this->endereço;
}

/**
 * Set the value of endereço
 *
 * @return  self
 */ 
public function setEndereço($endereço)
{
$this->endereço = $endereço;

return $this;
}

/**
 * Get the value of telefone
 */ 
public function getTelefone()
{
return $this->telefone;
}

/**
 * Set the value of telefone
 *
 * @return  self
 */ 
public function setTelefone($telefone)
{
$this->telefone = $telefone;

return $this;
}

/**
 * Get the value of email
 */ 
public function getEmail()
{
return $this->email;
}

/**
 * Set the value of email
 *
 * @return  self
 */ 
public function setEmail($email)
{
$this->email = $email;

return $this;
}
}
?>