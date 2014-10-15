<?php
namespace Surgeworks\CoreBundle\Controller;

use Surgeworks\CoreBundle\Modals\EmailModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MainController extends AbstractController {

    public function homeAction(){
        return $this->render('SurgeworksCoreBundle:Home:index.html.twig');
    }

    public function contactAction(Request $request){
        if ($request->getMethod() == "POST") {

            $name = $request->get('_name');
            $from = $request->get('_from');
            $subject = $request->get('_subject');
            $body = $request->get('_body');
            $to = $request->get('_to');

            $email = new EmailModel($name, $from, $to, $subject, $body);

            $result = $this->getService('surgeworks.email_manager')->send($email);
            $array = array( 'success' => $result);
            $response = new Response( json_encode( $array ), 200, array('Content-Type'=>'application/json'));
            $response->headers->set( 'Content-Type', 'application/json' );

            return $response;

        } else {
            $admins = $this->getService('surgeworks.user_manager')->findByRoleName('admin');
            return $this->render('SurgeworksCoreBundle:Contact:index.html.twig', array('admins' => $admins));
        }
    }
} 