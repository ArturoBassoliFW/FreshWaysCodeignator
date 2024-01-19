<?php

namespace App\Controllers;

class InnerPageRouting extends TemplateLoader
{
    public function innerRouting($uriCapture)
    {
        helper('security'); // Load the security helper
        $pageToLoad = sanitize_filename($uriCapture); // Sanitize the input
        return $this->load_header_footer($pageToLoad); // Call the load_header_footer function
    }    
}
