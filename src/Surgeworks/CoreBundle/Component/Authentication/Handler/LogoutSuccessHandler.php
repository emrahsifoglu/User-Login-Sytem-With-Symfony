<?php
namespace Surgeworks\CoreBundle\Component\Authentication\Handler;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\Request;

class LogoutSuccessHandler implements LogoutSuccessHandlerInterface
{
    public function onLogoutSuccess(Request $request) {
       //return new RedirectResponse($request->getBaseUrl().'/');
       return new RedirectResponse($request->headers->get('referer'));
    }
}