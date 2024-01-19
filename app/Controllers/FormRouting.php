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


        // Contact us form
        if ($formCapture == 'contact_us_form') {
        }

        // Footer form
        elseif ($formCapture == 'footer_form') { 

            // Setting rules
            $validation = \Config\Services::validation();

            $validation->setRule('email', 'Email', 'required|max_length[254]|valid_email', [
                'required' => '⚠️The email field is required.',
                'max_length' => '⚠️The email field cannot exceed 254 characters in length.',
                'valid_email' => '⚠️The email field must contain a valid email address.',
            ]);

            $validation->setRule('privacyCheck', 'Privacy Check', 'required', [
                'required' => '⚠️You must agree to the privacy policy.',
            ]);

            $fieldNames = ['email', 'privacyCheck'];

            // Getting data
            $data = $this->request->getPost($fieldNames);
            $current_page = $this->getCurrentPage();

            // If error in validation
            if (!$validation->run($data)) {
                
                $this->session->setFlashdata('form_error', TRUE);

                // Store the errors in the session
                $this->session->setFlashdata('errors', \Config\Services::validation()->getErrors());

                // Store the form data in the session
                $this->session->setFlashdata('form_data', $data);

                // Redirect to the page where the form was submitted
                $current_page .= '#footerForm';
                return redirect()->to($current_page);
            }

            // Call the email sending function
            $this->send_email();
            $this->session->set('success', 'Subscription sent successfully. You will receive an email shortly.');

            // Redirect to a specific URL
            return redirect()->to($current_page);
        } else {
            return view('about_us');
        }
    }

    // Get the current page without
    public function getCurrentPage()
    {
        $current_page = $this->request->getPost('current_page');        
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
