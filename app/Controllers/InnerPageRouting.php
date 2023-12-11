<?php

namespace App\Controllers;

class InnerPageRouting extends TemplateLoader
{
    public function innerRouting($uriCapture) {
        $pageToLoad = $uriCapture; // the name of the page you want to load
        return $this->load_header_footer($pageToLoad); // call the load_header_footer function
        }
}
