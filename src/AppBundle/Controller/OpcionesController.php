<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OpcionesController extends Controller
{
    /**
     * @Route("/getarmor", name="getarmor")
     */
    public function getArmorAction()
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        $armor = $em->createQueryBuilder()
            ->select('ar')
            ->from('AppBundle:Armor', 'ar')
            ->orderBy('ar.id')
            ->getQuery()
            ->getResult();

        return $this->render('home/Opciones/armor.html.twig', [
        'armor' => $armor
    ]);
    }
}