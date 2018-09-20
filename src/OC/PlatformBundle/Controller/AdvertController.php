<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\PlatformBundle\Entity\Task;
use Exception;
use OC\PlatformBundle\Form\TaskType;

class AdvertController extends Controller
{
    public function indexAction(Request $request)
    {
        $listeAdver =
    [
            ['id' => 2,
             'title' => 'Recherche développeur symfony',
             'author' => 'Alexandre',
             'content' => 'Nous cherchons un développeur Symfony débutant',
             'date' => new \DateTime(),
            ],
            ['id' => 5,
            'title' => 'Mission de webmaster',
             'author' => 'Hugo',
             'content' => 'Nous cherchons un webmaster capable de maintenir notre site internet',
             'date' => new \DateTime(),
            ],
            ['id' => 9,
             'title' => 'Offre de stage designer',
             'author' => 'Mathieu',
             'content' => 'Nous proposons un poste pour webdesigner',
             'date' => new \DateTime(),
            ],
     ];
        // throw new Exception('Errerur rà romaric', 400);
        //$content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig', ['listAdvert'=>$listeAdver]);
        return new Response('Deconnection');
    }

    public function viewAction(Request $request, $id)
    {
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $listeMembres =
            [
            'membre' => ['nom' => 'Lalaina', 'prenom' => 'romaric'],
            'membre2' => ['nom' => 'Lalaina 2', 'prenom' => 'romaric 2'],
            ];

        $content = $this->get('templating')->render(
                'OCPlatformBundle:Advert:view.html.twig',
                [
                    'pseudo' => 1,
                    'username' => 'lalaia',
                    'membre' => $listeMembres,
                ]
                );
        $form = $this->get('form.factory')->create(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            var_dump($data);
            die;
        }

        return $this->render('OCPlatformBundle:Advert:new.html.twig', array(
            'form' => $form->createView(),
        ));
        //  return new Response($content);
    }

    public function addAction(Request $request)
    {
        // return $this->redirectToRoute('oc_paltform_view', ['id'=>1]);
        return  $this->render('OCPlatformBundle:Advert:add.html.twig');
    }

    public function editAction(Request $request)
    {
        return new \Symfony\Component\HttpFoundation\JsonResponse('Ok');
        // return $this->render('OCPlatformBundle:Advert:edit.html.twig');
    }

    public function deleteAction(Request $request)
    {
        return $this->render('OCPlatformeBundle:Advert:delete.html.twig');
    }

    public function menuAction(Request $request)
    {
        $listeAdver =
    [
            ['id' => 2, 'title' => 'Recherche développeur symfony'],
            ['id' => 5, 'title' => 'Mission de webmaster'],
            ['id' => 9, 'title' => 'Offre de stage designer'],
     ];

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', ['listAdvert' => $listeAdver]);
    }
}
