<?php

namespace Site\MainBundle\Controller;

use Site\MainBundle\Entity\NewUser;
use Site\MainBundle\Form\NewUserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteMainBundle:Main:index.html.twig');
    }

    public function formAction()
    {
        $newUser = new NewUser();
        $form = $this->createForm(new NewUserType(), $newUser);
        return $this->render('SiteMainBundle:Main:form.html.twig', array(
            'form' => $form
        ));
    }

    public function thanksAction()
    {
        return $this->render('SiteMainBundle:Main:thanks.html.twig');
    }
}
