<?php

namespace FrontBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }

    public function showActuAction(){
        $em=$this->getDoctrine()->getManager();
        $cal=$em->getRepository("backBundle:actualite")->findAll();
        return $this->render('FrontBundle:Default:actualite.html.twig',array('rec'=>$cal));
    }


    public function showAction(){
        $em=$this->getDoctrine()->getManager();
        $cal=$em->getRepository("FrontBundle:Schedule")->findAll();
        return $this->render('FrontBundle:Default:show.html.twig',array('rec'=>$cal));
    }

    function rechercheVAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $vol= $em->getRepository('FrontBundle:Schedule')->findAll();

        if ($request->getMethod()=="POST")
        {
            $numv=$request->get('numv');
            //$nump=$request->get('nump');

            $vol=$em->getRepository('FrontBundle:Schedule')
                ->findBy(array('numVole'=>$numv));


        }

        return $this->render('FrontBundle:Default:findVol.html.twig'
            ,array("rec"=>$vol) );
    }


}
