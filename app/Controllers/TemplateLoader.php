<?php

namespace App\Controllers;

class TemplateLoader extends BaseController
{
    public function load_header_footer($toLoad): string
    {
        return  view('templates/header')
            .   view($toLoad)
            .   view('templates/footer');
    }
}
