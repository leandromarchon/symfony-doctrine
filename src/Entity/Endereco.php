<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnderecoRepository")
 */
class Endereco
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
    private $logradouro;

    /**
     * @var string
     * @ORM\Column(type="string", length=10)
     */
    private $numero;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $bairro;

    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     */
    private $cidade;

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
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param string $logradouro
     * @return self
     */ 
    public function setLogradouro(string $logradouro)
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    /**
     * @return string
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     * @return self
     */ 
    public function setNumero(string $numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string
     */ 
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro
     * @return self
     */ 
    public function setBairro(string $bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return string
     */ 
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param string $cidade
     * @return self
     */ 
    public function setCidade(string $cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }
}
