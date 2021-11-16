<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/demo", name="demo")
 */
class DemoController extends AbstractController
{
    /**
     * @Route("/{name}", name="demoGet", methods="GET", requirements={"name"="^((?<!blog).)(\D+)*$"})
     */
    public function requestGetAndNameParameter(string $name): Response
    {
        die(dump('Hello '.$name));
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }

    /**
     * @Route("/{name}", name="demoPost", methods="POST", requirements={"name"="^((?<!blog).)(\D+)*$"})
     */
    public function requestPostAndNameParameter(string $name): Response
    {
        die(dump('Hello '.$name.' Ceci est une requete POST'));
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function getBlog(): Response
    {
        die(dump('Bienvenue sur la page blog'));
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }
}
