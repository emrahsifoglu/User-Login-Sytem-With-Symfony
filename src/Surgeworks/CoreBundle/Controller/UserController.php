<?php
namespace Surgeworks\CoreBundle\Controller;

class UserController extends AbstractController {
    public function indexAction()
    {
        $username = $this->getUsername();
        return $this->render('SurgeworksCoreBundle:User:index.html.twig', array('username' => $username));
    }
} 