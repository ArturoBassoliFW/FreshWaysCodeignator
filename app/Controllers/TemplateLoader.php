<?php

namespace App\Controllers;

class TemplateLoader extends BaseController
{    

    public function load_header_footer($toLoad): string
    {
        helper('url'); // Load the URL helper
        $uri = service('uri'); // Get the current URI
        $data['active'] = $uri->getSegment(1);

        return  view('templates/header', $data)
            .   view($toLoad)
            .   view('templates/footer');
    }
}
