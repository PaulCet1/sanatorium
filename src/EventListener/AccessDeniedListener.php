<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Routing\RouterInterface;

class AccessDeniedListener
{

public function __construct(private RouterInterface $router)
{
$this->router = $router;
}

public function onKernelException(ExceptionEvent $event)
{
$exception = $event->getThrowable();

if ($exception instanceof AccessDeniedException) {
$response = new RedirectResponse($this->router->generate('access_denied'));
$event->setResponse($response);
}
}
}
