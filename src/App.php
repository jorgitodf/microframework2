<?php

namespace App\Framework;

use App\Framework\Router\Router;
use App\Framework\DI\Resolver;
use App\Framework\Renderer\RendererInterface;

class App
{
    private $router;
    private $renderer;

    public function __construct()
    {
        $path_info = $_SERVER['PATH_INFO'] ?? '/';
        $request_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $this->router = new Router($path_info, $request_method);
    }

    public function setRenderer(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function get(string $path, $fn)
    {
        $this->router->get($path, $fn);
    }

    public function post(string $path, $fn)
    {
        $this->router->post($path, $fn);
    }

    public function run()
    {
        $route = $this->router->run();
        $resolver = new Resolver;
        $data = $resolver->method($route['callback'], ['params'=>$route['params']]);
        $this->renderer->setData($data);
        $this->renderer->run();
    }
}