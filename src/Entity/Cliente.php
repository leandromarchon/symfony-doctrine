<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClienteRepository")
 */
class Cliente
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $nome;

    /**
     * @var string
     * @ORM\Column(type="string", length=20)
     */
    private $telefone;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @return mixed
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     * @return self
     */ 
    public function setNome(string $nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     * @return self
     */ 
    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return self
     */ 
    public function setEmail(string $email)
    {
        $this->email = $email;
        return $this;
    }
}
