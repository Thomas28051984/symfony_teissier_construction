<?php

namespace App\EventListener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Routing\RouterInterface;

class LoginRedirectListener
{
    private $tokenStorage;
    private $router;

    public function __construct(TokenStorageInterface $tokenStorage, RouterInterface $router)
    {
        $this->tokenStorage = $tokenStorage;
        $this->router = $router;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $user = $this->tokenStorage->getToken()->getUser();
        
        // Redirige l'utilisateur selon son rôle
        if ($user->isAdmin()) {
            $event->setResponse(new RedirectResponse($this->router->generate('admin_dashboard')));
        } else {
            $event->setResponse(new RedirectResponse($this->router->generate('client_dashboard')));
        }
    }
}