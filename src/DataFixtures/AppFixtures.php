<?php

namespace App\DataFixtures;

use App\Entity\Raca;
use App\Entity\Especie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $especies = [
            "Cachorro" => [
                ["nome" => "SRD"],
                ["nome" => "Boxer"],
                ["nome" => "Shihtzu"],
                ["nome" => "Poodle"]
            ],
            "Gato" => [
                ["nome" => "SRD"],
                ["nome" => "Siamẽs"],
                ["nome" => "Angorá"]
            ]
        ];

        foreach($especies as $especie => $racas)
        {
            $objeto_especie = new Especie();
            $objeto_especie->setNome($especie);
            $manager->persist($objeto_especie);

            foreach($racas as $raca)
            {
                $objeto_raca = new Raca();
                $objeto_raca->setNome($raca['nome']);
                $objeto_raca->setEspecie($objeto_especie);
                $manager->persist($objeto_raca);
            }
        }

        $manager->flush();
    }
}
