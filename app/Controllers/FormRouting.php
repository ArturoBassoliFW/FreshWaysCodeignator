<?php

namespace App\Controllers;

class FormRouting extends TemplateLoader
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
        $instance = new FormRouting;

        // Contact us form
        if ($formCapture == 'contact_us_form') {

            // Validation rules
            $formFields = [
                'email' => 'required|max_length[254]|valid_email',
                'companyName' => 'required',
                'inquiryType' => 'required|not_in_list[Select Inquiry Type]',
            ];
            return $instance->process_form($formFields, 'contact_us_form', $this->request);
        }
        // Footer form
        elseif ($formCapture == 'footer_form') {
            // Existing validation rules for the footer form
            $formFields = [
                'email' => 'required|max_length[254]|valid_email',
                'privacyCheck' => 'required',
            ];

            return $instance->process_form($formFields, 'footer_form', $this->request);
        } 
        
        else {
            return view('about_us');
        }
    }

    // Process the forms
    public function process_form($formFields, $formName, $request)
    {

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

            $this->session->setFlashdata('form_error', TRUE);

            // Get form name
            $formNameKey = $formName . '_errors';

            // Store the errors in the session with a unique key
            $this->session->setFlashdata($formNameKey, $validation->getErrors());

            // Store the form data in the session
            $this->session->set('form_data', $data);

            // Store the form name in the session
            $this->session->set('form_name', $formName);

            // Redirect to the page where the form was submitted
            $current_page .= '#' . $formName;
            return redirect()->to($current_page);
        }

        // Call the email sending function
        $this->send_email();
        $this->session->set('success', 'Subscription sent successfully. You will receive an email shortly.');


        // Clear all flash data before redirecting
        $this->session->remove('form_error');
        $this->session->set('form_data', []);

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
