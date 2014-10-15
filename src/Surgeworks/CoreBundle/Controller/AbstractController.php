<?php
namespace Surgeworks\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbstractController extends Controller {

    /**
     *@return string
     */
    public function getUsername(){
       return $this->get('security.context')->getToken()->getUser()->getUsername();
    }

    /**
     *@param string $name
     *@return object
     */
    public function getService($name){
        return $this->get($name);
    }
} 