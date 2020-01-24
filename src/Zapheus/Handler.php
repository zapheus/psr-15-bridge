<?php

namespace Zapheus\Bridge\Psr\Zapheus;

use Zapheus\Http\Message\RequestInterface;
use Zapheus\Http\Message\ResponseInterface;
use Zapheus\Http\Server\HandlerInterface;

class Handler implements HandlerInterface
{
    public function handle(RequestInterface $request) : ResponseInterface
    {
    }
}
