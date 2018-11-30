<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnimalRepository")
 */
class Animal
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
     * @var date
     * @ORM\Column(type="date")
     */
    private $data_nascimento;

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
     * @return date
     */ 
    public function getData_nascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param date $data_nascimento
     * @return self
     */ 
    public function setData_nascimento(date $data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
        return $this;
    }
}
