<?php

namespace Zapheus\Bridge\Psr\Zapheus;

use Zapheus\Http\Message\RequestInterface;
use Zapheus\Http\Message\ResponseInterface;
use Zapheus\Http\Server\HandlerInterface;
use Zapheus\Http\Server\MiddlewareInterface;

class Middleware implements MiddlewareInterface
{
    public function process(RequestInterface $request, HandlerInterface $handler) : ResponseInterface
    {
    }
}
