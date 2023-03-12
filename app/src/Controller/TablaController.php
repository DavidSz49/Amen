<?php

namespace App\Controller;

use App\Entity\Proveedor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TablaController extends AbstractController
{
    /**
     * @Route("/", name="app_tabla")
     */
    public function index(): Response
    {
        $proveedores = $this -> getDoctrine() -> getManager() -> getRepository(Proveedor::class) -> findBy([],['Nombre' => 'ASC']);
        
        return $this->render('tabla/tabla.html.twig', [
            'proveedores' => $proveedores
        ]);
    }
}
