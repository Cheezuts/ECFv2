<?php

namespace app\Vue;

abstract class RenderGlobalVue
{
    private function renderHeader()
    {
        include_once 'Header.php';
    }

    private function renderNav()
    {
        include_once 'Navbar.php';
    }

    private function renderFooter()
    {
        include_once 'Footer.php';
    }

    public function print($content)
    {
        $this->renderHeader();
        $this->renderNav();

        echo $content;

        $this->renderFooter();
    }
}
