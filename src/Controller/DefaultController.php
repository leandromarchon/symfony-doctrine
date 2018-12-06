<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Cliente;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     * @Template("default/index.html.twig")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $qtd_animais = $entityManager->getRepository(Cliente::class)->qtsAnimaisPorCliente();
        $qtd_racas = $entityManager->getRepository(Animal::class)->qtdPorRaca();
        
        return [
            'qtd_animais' => $qtd_animais,
            'qtd_racas' => $qtd_racas
        ];
    }
}
