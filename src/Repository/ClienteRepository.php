<?php

namespace App\Repository;

use PDO;
use App\Entity\Cliente;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Cliente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cliente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cliente[]    findAll()
 * @method Cliente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClienteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cliente::class);
    }

    public function qtsAnimaisPorCliente()
    {
        $sql = "select
                    count(ac.animal_id) as qtd,
                    c.nome
                from
                    animal_cliente ac
                inner join
                    cliente c on c.id = ac.cliente_id
                group by
                    c.nome
        ";

        return $this->getEntityManager()->getConnection()->executeQuery($sql)->fetchAll(PDO::FETCH_OBJ);
    }
}
