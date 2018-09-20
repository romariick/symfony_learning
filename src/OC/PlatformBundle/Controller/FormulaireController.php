<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\PlatformBundle\Entity\Task;
use OC\PlatformBundle\Form\TaskType;

class FormulaireController extends Controller
{
    public function formAction(\Symfony\Component\HttpFoundation\Request $request)
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
        // TaskType : type d'une tache
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
    }
}
