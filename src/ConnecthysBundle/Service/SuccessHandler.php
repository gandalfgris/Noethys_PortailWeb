<?php
/**
*
* URL Source : http://benjamin.leveque.me/symfony2-redirection-de-l-utilisateur-en-fonction-de-son-role.html
*
*/

namespace ConnecthysBundle\Service;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class SuccessHandler implements AuthenticationSuccessHandlerInterface
{
    protected $router;

    public function __construct(RouterInterface $router, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        if ($this->authorizationChecker->isGranted('ROLE_ADMINISTRATOR')) {
            return new RedirectResponse($this->router->generate('admin'));
        }
        else {
            return new RedirectResponse($this->router->generate('dashboard'));
        }
    }
}
?>