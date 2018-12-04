<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Form\AnimalType;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("animal/cadastrar", name="cadastrar_animal")
     * @Template("animais/create.html.twig")
     */
    public function create(Request $resquest)
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($resquest);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($animal);
            $entityManager->flush();

            $this->addFlash('success', 'Registro salvo com sucesso!');
            return $this->redirectToRoute('listar_animais');
        }

        return [
            'form' => $form->createView()
        ];
    }
}
