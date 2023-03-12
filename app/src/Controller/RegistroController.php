<?php

namespace App\Controller;

use App\Entity\Proveedor;
use App\Form\ProveedorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistroController extends AbstractController
{
    /**
     * @Route("/registro", name="app_registro")
     */
    public function index(Request $request): Response
    {   
        $proveedor = new Proveedor();
        $fechaAct = \DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));
        $fechaEdit = \DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));
        $form = $this -> createForm(ProveedorType::class,$proveedor);
        $form -> handleRequest($request);

        if ($form -> isSubmitted() && $form -> isValid()) {
            $em = $this -> getDoctrine() -> getManager();
            $proveedor -> setCreado($fechaAct);
            $proveedor -> setEditado($fechaEdit);
            $em -> persist($proveedor);
            $em -> flush();
            return $this -> redirectToRoute("app_tabla");
        }

        return $this->render('registro/registro.html.twig', [
            'formulario' => $form -> createView()
        ]);
    }
}
