<?php

namespace App\Controller;

use App\Entity\Category;

use App\Entity\Order;
use App\Entity\Pizzas;
use App\Form\OrderType;
use App\Form\PizzaFormType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PizzaController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function showProducts(ManagerRegistry $doctrine):Response{
        $categories = $doctrine->getRepository(Category::class)->findAll();
//        dd($product);
        return $this->render('pizza/home.html.twig', ['category'=>$categories]);
    }

    #[Route('/contact', name: 'contact')]
    public function showContact(): Response
    {
        return $this->render('pizza/contact.html.twig',
            ['controller_name' => 'ContactController']);
    }

    #[Route('/pizzas/{id}', name: 'pizzas')]
    public function showPizza(ManagerRegistry $doctrine, $id):Response{
        $category = $doctrine->getRepository(Category::class)->find($id);
//        dd($product);
        return $this->render('pizza/pizzas.html.twig', ['category'=>$category]);
    }

    #[Route('/bestellen/{id}', name: 'bestellen')]
    public function form(Request $request, ManagerRegistry $doctrine,int $id): Response
    {

        $task = new Order();
        $form = $this->createForm(OrderType::class, $task);

        $form->handleRequest($request);
       // dd($form);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $doctrine->getManager();
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();
            $task->setPizza($doctrine->getRepository(Pizzas::class)->find($id));
            //dd($task);
            $entityManager->persist($task);

            $entityManager->flush();


            $this->addFlash('success', 'Jouw order is toegevoegd!');
            // ... perform some action, such as saving the task to the database
            return $this->redirectToRoute('besteloverzicht');


        }

        return $this->renderForm('pizza/bestel.html.twig',
            ['form' => $form,]);
    }

    #[Route('besteloverzicht', name: 'besteloverzicht')]
    public function showOrder():Response{

//        dd($product);
        return $this->render('pizza/besteloverzicht.html.twig');
    }
    #[Route('pizzabakker', name: 'bakker')]
    public function showBaker(ManagerRegistry $doctrine):Response{
        $order = $doctrine->getRepository(Order::class)->findAll();

//        dd($product);
        return $this->render('pizza/pizzabakker.html.twig', ['order'=>$order]);
    }

    #[Route('/product/{name}/{img}', name: 'create_product')]
    public function createProduct(ManagerRegistry $doctrine, string $name, string $img): Response
    {
        $entityManager = $doctrine->getManager();
        $product = new Category();
        $product->setName($name);
        $product->setImg($img);


        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }

    #[Route('/pizza/{name}/{img}', name: 'create_pizza')]
    public function createPizza(ManagerRegistry $doctrine, string $name, string $img): Response
    {
        $entityManager = $doctrine->getManager();
        $product = new Pizzas();
        $product->setName($name);
        $product->setImg($img);


        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }


}
