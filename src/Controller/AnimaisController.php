<?php

namespace App\Controller;

use App\Entity\Animal;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AnimaisController extends Controller
{
    /**
     * @Route("/animais", name="listar_animais")
     * @Template("animais/index.html.twig")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $animais = $entityManager->getRepository(Animal::class)->findAll();
        
        return [
            'animais' => $animais
        ];
    }

    /**
     * @Route("animal/visualizar/{id}", name="visualizar_animal")
     * @Template("animal/view.html.twig")
     */
    public function view(Animal $animal)
    {
        return [
            'animal' => $animal
        ];
    }
}
