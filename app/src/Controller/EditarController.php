<?php

namespace App\Controller;

use App\Entity\Proveedor;
use App\Form\ProveedorType;
use App\Form\RegistroType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditarController extends AbstractController
{
    /**
     * @Route("/editar/{id}", name="app_editar")
     */
    public function index(int $id, Request $request): Response
    {
        $proveedor = $this -> getDoctrine() -> getRepository(Proveedor::class) -> find($id);
        
        $fechaedit = \DateTime::createFromFormat('Y-m-d H:i:s',date('Y-m-d H:i:s'));

        $form = $this -> createForm(ProveedorType::class,$proveedor);
        $form -> handleRequest($request);

        if (!$proveedor) {
            return $this->render('eliminar/editar.html.twig', [
                'id' => $id
            ]);
        }

        if ($form -> isSubmitted() && $form -> isValid()) {
            $proveedor -> setEditado($fechaedit);
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($proveedor);
            $em -> flush();
        }

        return $this->render('editar/editar.html.twig', [
            'formulario' => $form -> createView()
        ]);
    }
}