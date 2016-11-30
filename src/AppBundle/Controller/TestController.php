<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Categories;
use AppBundle\Entity\Products;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/test", name="test_list")
     */
    public function testAction($request)
    {
        $test = $this->getDoctrine()
               ->getRepository("AppBundle:Products")
                ->findAll();
        
        return $this->render('test/index.html.twig', array(
            'products' => $test
        )) ;
    }
    
     /**
     * @Route("/test/cat", name="cat_list")
     */
    public function catAction(Request $request)
    {
        $name=$request->get('name');
        
        $category = $this->getDoctrine()
               ->getRepository("AppBundle:Categories")
                ->findBy(array('catName'=>$name));
        
        $product = $this->getDoctrine()
                ->getRepository("AppBundle:Products")
                ->findBy(array('cat'=>$category[0]->getCatId()));                        
       
        return $this->render('test/category.html.twig', array(
            'products' => $product
        ) );
    }

}




