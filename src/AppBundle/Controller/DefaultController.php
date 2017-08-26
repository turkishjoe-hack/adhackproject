<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $items = $em->getRepository(Item::class)->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'items'=>$items,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
