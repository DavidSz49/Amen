<?php

namespace App\Controller;

use App\Entity\Proveedor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EliminarController extends AbstractController
{
    /**
     * @Route("/eliminar/{id}", name="app_eliminar")
     */
    public function index(int $id): Response
    {
        $em = $this -> getDoctrine() -> getManager();
        $proveedor = $em -> getRepository(Proveedor::class) -> find($id);

        if (!$proveedor) {
            return $this->render('eliminar/eliminar.html.twig', [
                'id' => $id
            ]);
        }

        $em -> remove($proveedor);
        $em -> flush();

        return $this -> redirectToRoute('app_tabla');
    }
}