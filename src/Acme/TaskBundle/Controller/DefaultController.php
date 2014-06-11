<?php

namespace Acme\TaskBundle\Controller;

use Acme\TaskBundle\Entity\Task;
use Acme\TaskBundle\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        $task = new Task();

        $form = $this->createForm(new TaskType(), $task);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $name = $task->getName();
            $surname = $task->getSurname();
            $email = $task->getEmail();

            return $this->render('AcmeTaskBundle:Default:thank.html.twig', array(
                'name' => $name,
                'surname' => $surname,
                'email' => $email,
            ));
        }
        return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function indexAction($name)
    {
        return $this->render('AcmeTaskBundle:Default:index.html.twig', array('name' => $name));
    }
}
