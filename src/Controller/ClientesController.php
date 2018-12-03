<?php

namespace App\Controller;

use App\Entity\Cliente;
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
}
