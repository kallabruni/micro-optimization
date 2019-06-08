<?php


namespace App\Controller;

use App\Entity\Result;
use App\Entity\Test;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;



class TestController extends AbstractController
{

    /**
     * @Route("/", methods={"GET"})
     */
    public function index()
    {

        $tests = $this->getDoctrine()->getRepository(Test::Class)->findAll();

        return $this->render('tests/index.html.twig', ['tests' => $tests]);
    }
    /**
     * @Route("/tests/{id}", methods={"GET"})
     */
    public function show($id){

        $tests = $this->getDoctrine()->getRepository(Test::Class)->find($id);
        $results = $this->getDoctrine()->getRepository(Result::Class)->findBy(['idResult'=>$id]);

        return $this->render('tests/show.html.twig', ['tests' => $tests, 'results'=>$results]);

    }

}