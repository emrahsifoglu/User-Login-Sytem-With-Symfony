<?php
/**
 * Created by PhpStorm.
 * User: Emrah
 * Date: 04.10.2014
 * Time: 14:33
 */

namespace Surgeworks\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends AbstractController
{

    public function loginAction(){
        return $this->redirect($this->generateURL('home'));
    }

    public function loginCheckAction() {

    }

    public function indexAction(){
        $username = $this->getUsername();
        $area = "";
        $role = "role";

        if ( $this->get('security.context')->isGranted('ROLE_USER')) {
            $role = 'ROLE_USER';
            $area = 'user_area';
        } else if ( $this->get('security.context')->isGranted('ROLE_ADMIN')) {
            $role = 'ROLE_ADMIN';
            $area = 'admin_area';
        }

        $url = $this->generateUrl($area);
        return $this->render('SurgeworksCoreBundle:Security:index.html.twig', array('username' => $username, 'role' => $role, 'area' => $url));
    }
}