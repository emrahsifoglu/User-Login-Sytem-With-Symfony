<?php

namespace Surgeworks\CoreBundle\Component\Authentication\Handler;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;

class AuthenticationHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface
{
    private $router;
    private $session;
    private $security;
    private $role;
    private $url;

    /**
     * Constructor
     *
     * @author Joe Sexton <joe@webtipblog.com>
     * @param RouterInterface $router
     * @param Session $session
     * @param SecurityContext $security
     */
    public function __construct( RouterInterface $router, Session $session, SecurityContext $security)
    {
        $this->router  = $router;
        $this->session = $session;
        $this->security = $security;
    }

    /**
     * onAuthenticationSuccess
     *
     * @author Joe Sexton <joe@webtipblog.com>
     * @param Request $request
     * @param TokenInterface $token
     * @return Response
     */
    public function onAuthenticationSuccess( Request $request, TokenInterface $token )
    {
        if ( $request->isXmlHttpRequest() ) {

            if ($this->security->isGranted('ROLE_USER')){
                $this->role = 'ROLE_USER';
                $this->url = $this->router->generate('user_area');
            } else if ($this->security->isGranted('ROLE_ADMIN')){
                $this->role = 'ROLE_ADMIN';
                $this->url = $this->router->generate('admin_area');
            }

            $array = array( 'success' => true , 'role' =>  $this->role);
            $response = new Response( json_encode( $array ), 200, array('Content-Type'=>'application/json'));
            $response->headers->set( 'Content-Type', 'application/json' );

            return $response;

        } else {
            $url = ($this->session->get('_security.main.target_path' )) ? $this->session->get( '_security.main.target_path' ) : $this->router->generate( 'login_success' );
            return new RedirectResponse( $url );
        }
    }

    /**
     * onAuthenticationFailure
     *
     * @author Joe Sexton <joe@webtipblog.com>
     * @param Request $request
     * @param AuthenticationException $exception
     * @return Response
     */
    public function onAuthenticationFailure( Request $request, AuthenticationException $exception )
    {
        if ( $request->isXmlHttpRequest() ) {

            $array = array( 'success' => false, 'message' => $exception->getMessage() );
            $response = new Response( json_encode( $array ), 200, array('Content-Type'=>'application/json'));
            $response->headers->set( 'Content-Type', 'application/json' );

            return $response;

        } else {
            $request->getSession()->set(SecurityContextInterface::AUTHENTICATION_ERROR, $exception);
            return new RedirectResponse( $this->router->generate( 'login' ) );
        }
    }
}