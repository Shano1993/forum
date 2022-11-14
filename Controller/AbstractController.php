<?php

namespace App\Controller;

abstract class AbstractController
{
    abstract public function index();

    /**
     * @param string $temp
     * @param array $data
     * @return void
     */
    public function render(string $temp, array $data = [])
    {
        ob_start();
        require __DIR__ . '/../View/' . $temp . '.html.php';
        $html = ob_get_clean();
        require __DIR__ . '/../View/base.html.php';
    }
}