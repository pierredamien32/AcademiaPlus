<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/dashboard', name: 'app_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('admin/listeEtu.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/dashboard/add-etudiant', name: 'app_addEtu')]
    public function addEtu(): Response
    {
        return $this->render('admin/addEtu.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/dashboard/modifie-etudiant', name: 'app_editEtu')]
    public function editEtu(): Response
    {
        return $this->render('admin/editEtu.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/dashboard/profil-admin', name: 'app_profilAdmin')]
    public function profilAdmin(): Response
    {
        return $this->render('admin/profileAdmin.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
