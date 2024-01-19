<?php

namespace App\Controllers;

class FormRoutingCopy extends TemplateLoader
{

    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session(); // Call the session library
    }

    public function form_controller($formCapture)
    {

        // Check which form is submitting

        // Create an instance of YourClass
        $instance = new FormRoutingCopy;
        
        // Contact us form
        if ($formCapture == 'contact_us_form') {
            $formFields = [
                // Add the fields and their validation rules for the contact us form here
            ];
            $instance->process_form($formFields, 'contact_us_form', $this->request);
        }
        
        // Footer form
        elseif ($formCapture == 'footer_form') { 

            // ⚠️ LOGS!!!
            log_message('info', $formCapture);

            $formFields = [
                'email' => 'required|max_length[254]|valid_email',
                'privacyCheck' => 'required'
            ];
            $instance->process_form($formFields, 'footer_form', $this->request);

        }
         else { 
            return view('about_us');
        }
    }

    // Process the forms
    public function process_form($formFields, $formName, $request) {
        // Setting rules
        $validation = \Config\Services::validation();
    
        foreach ($formFields as $field => $rules) {
            $validation->setRule($field, ucfirst($field), $rules);
        }
    
        // Getting data
        $data = $request->getPost(array_keys($formFields));
        $current_page = $this->getCurrentPage($request);
    
        // If error in validation
        if (!$validation->run($data)) {

            // ⚠️ LOGS!!!
            log_message('info', 'there is error there');

            $this->session->setFlashdata('form_error', TRUE);
    
            // Store the errors in the session
            $this->session->setFlashdata('errors', \Config\Services::validation()->getErrors());
    
            // Store the form data in the session
            $this->session->setFlashdata('form_data', $data);

            // ⚠️ LOGS!!!
            log_message('info', $current_page);
    
            // Redirect to the page where the form was submitted
            $current_page .= '#' . $formName;
            return redirect()->to($current_page);
        }
    
        // Call the email sending function
        $this->send_email();
        $this->session->set('success', 'Subscription sent successfully. You will receive an email shortly.');

        // ⚠️ LOGS!!!
        log_message('info', $current_page);
    
        // Redirect to a specific URL
        return redirect()->to($current_page);
    }
    

    // Get the current page without
    public function getCurrentPage($request)
    {
        $current_page = $request->getPost('current_page');        
        return $this->removeIndex($current_page);
    }

    // Avoid "index" in the $current_page URL
    public function removeIndex($current_page)
    {
        $searchString = 'index.php/';

        if (strpos($current_page, $searchString) !== false) {
            $current_page = str_replace($searchString, '', $current_page);
        }

        return $current_page;
    }

    // Send the email
    public function send_email()
    {

    }
}
