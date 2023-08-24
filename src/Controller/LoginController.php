<?php

namespace App\Controller;

use App\Entity\Login;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function showForm(Request $request): Response
    {
        $login = new Login();
        $loginForm = $this->createForm(LoginType::class, $login);

        $loginForm->handleRequest($request);
        if ($loginForm->isSubmitted() && $loginForm->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $login = $loginForm->getData();

            // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('');
        }


        return $this->renderForm('pizza/login.html.twig',
            ['form' => $loginForm,]);
    }
}
