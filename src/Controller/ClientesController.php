<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Form\ClienteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ClientesController extends Controller
{
    /**
     * @Route("/clientes", name="listar_clientes")
     * @Template("clientes/index.html.twig")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $clientes = $entityManager->getRepository(Cliente::class)->findAll();
        
        return [
            'clientes' => $clientes
        ];
    }

    /**
     * @Route("/cliente/visualizar/{id}", name="visualizar_cliente")
     * @Template("clientes/view.html.twig")
     */
    public function view(Cliente $cliente)
    {
        return [
            'cliente' => $cliente
        ];
    }

    /**
     * @Route("cliente/cadastrar", name="cadastrar_cliente")
     * @Template("clientes/create.html.twig")
     */
    public function create(Request $request)
    {
        $cliente = new Cliente();

        $form = $this->createForm(ClienteType::class, $cliente);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cliente);
            $entityManager->flush();

            $this->addFlash('success', 'Registro inserido com sucesso!');
            return $this->redirectToRoute('listar_clientes');
        }

        return [
            'form' => $form->createView()
        ];
    }
}
