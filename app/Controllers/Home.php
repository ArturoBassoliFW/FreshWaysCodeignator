<?php

namespace App\Controllers;

class Home extends TemplateLoader
{
    public function index() {
        $pageToLoad = 'home_page'; // the name of the page you want to load
        return $this->load_header_footer($pageToLoad); // call the load_header_footer function
        }
}
