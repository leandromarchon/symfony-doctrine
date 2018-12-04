<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RacaRepository")
 */
class Raca
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
     * @var object
     * @ORM\ManyToOne(targetEntity="App\Entity\Especie", inversedBy="id")
     */
    private $especie;

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
     * @return object
     */ 
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * @param object $especie
     * @return self
     */ 
    public function setEspecie(object $especie)
    {
        $this->especie = $especie;
        return $this;
    }

    public function getNomeEspecie()
    {
        return $this->getEspecie() ? $this->getEspecie()->getNome() : null;
    }
}
