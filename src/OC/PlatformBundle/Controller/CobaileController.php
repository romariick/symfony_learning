<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\PlatformBundle\Entity\Task;

class CobaileController extends Controller
{
    public function cobaileAction(Request $request)
    {
        $task = new Task();

        $formBuilder = $this->get('form.factory')->createBuilder(\Symfony\Component\Form\Extension\Core\Type\FormType::class, $task);
        $formBuilder->add('task', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
                    ->add('dueDate', \Symfony\Component\Form\Extension\Core\Type\DateTimeType::class)
                    ->add('save', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class);

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            dump($request->get('form'), $request->request->get('form'));
            die;

            $data = $form->getData();

            dump($data->getTask());
            die;
        }

        return $this->render('OCPlatformBundle:Cobail:index.html.twig', ['form' => $form->createView()]);
    }
}
