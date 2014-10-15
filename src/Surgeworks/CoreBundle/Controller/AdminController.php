<?php
namespace Surgeworks\CoreBundle\Controller;

class AdminController extends AbstractController
{
    public function indexAction()
    {
        $username = $this->getUsername();
        return $this->render('SurgeworksCoreBundle:Admin:index.html.twig', array('username' => $username));
    }
}