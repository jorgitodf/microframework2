<?php

namespace App\Framework\Renderer;

interface RendererInterface
{
    public function setData($data);
    public function run();
}