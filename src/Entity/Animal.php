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
     * @var object
     * @ORM\ManyToMany(targetEntity="App\Entity\Cliente", mappedBy="Animal")
     */
    private $cliente;

    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="App\Entity\Raca", inversedBy="id")
     */
    private $raca;

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
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param date $data_nascimento
     * @return self
     */ 
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
        return $this;
    }

    /**
     * @return object
     */ 
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param object $cliente
     * @return self
     */ 
    public function setCliente(object $cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }

    /**
     * @return object
     */ 
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * @param object $raca
     * @return self
     */ 
    public function setRaca(object $raca)
    {
        $this->raca = $raca;
        return $this;
    }
}
