<?php

namespace Immobilier\BudgetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ImmobilierBudgetBundle:Default:index.html.twig', array('name' => $name));
    }
}
