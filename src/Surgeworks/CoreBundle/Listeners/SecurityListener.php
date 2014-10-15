<?php
namespace Surgeworks\CoreBundle\Listeners;

use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher as EventDispatcher;

class SecurityListener
{
    /**
     * Router
     *
     * @var Router
     */
    protected $router;

    /**
     * Route to redirect to
     *
     * @var string
     */
    protected $redirect;

    /**
     * Constructor
     *
     * @param Router $router The router
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $user = $event->getAuthenticationToken()->getUser();
       //return new RedirectResponse($this->router->generate('logout', array()));
       //return sprintf('acme_google_authenticator_%s', $user->getUsername());
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {

    }
}