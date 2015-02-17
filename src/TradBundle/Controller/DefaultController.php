<?php

namespace TradBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($framework)
    {
        $t = $this->get('translator')->trans('%framework%.great', array('%framework%' => $framework));

        return $this->render('TradBundle:Default:index.html.twig', array(
            "trad" => $t
        ));


    }


}
