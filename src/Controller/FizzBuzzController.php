<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FizzBuzzController extends AbstractController
{
    #[Route('/fizz/buzz', name: 'fizz_buzz')]
    public function index(FizzBuzz $fizzbuzz): Response
    {
        $results=$fizzbuzz->getResults(100);

        return $this->render('fizz_buzz/index.html.twig', [
            'controller_name' => 'FizzBuzzController','results'=>$results
        ]);
    }
}
