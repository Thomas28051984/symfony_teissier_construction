<?php

namespace App\EventListener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;

class LoginRedirectListener
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $user = $event->getAuthenticationToken()->getUser();
        
        // Redirige l'utilisateur selon son rôle
        if ($user->isAdmin()) {
            $response = new RedirectResponse($this->router->generate('admin_page'));
            $url = $this->router->generate('admin_page');
        } elseif ($user->isClient()){
            $response = new RedirectResponse($this->router->generate('client_page'));
            $url = $this->router->generate('client_page');
        } else {
            $response = new RedirectResponse($this->router->generate('homepage'));
            $url = $this->router->generate('homepage');
        }

        // Crée une redirection
        $response = new RedirectResponse($url);

        // Retourne la réponse de redirection
        return $response;
    }
}