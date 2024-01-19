<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function index()
    {
        log_message('info', 'viewe works');
        return view('signup');
    }

    public function submit()
    {
        log_message('info', 'submit starts');

        $rules = [
            'username' => 'required|max_length[30]',
            'password' => [
                'rules' => 'required|max_length[255]|min_length[10]',
                'errors' => [
                    'regex_match' => 'Password must include: 1 lowercase letter, 1 uppercase letter, 1 number, 1 symbol.'
                ]
            ],
            'passconf' => 'required|max_length[255]|matches[password]',
            'email'    => 'required|max_length[254]|valid_email',
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (!$this->validateData($data, $rules)) {
            log_message('info', 'check goes well');
            return view('signup');
        }

        // If you want to get the validated data.
        $validData = $this->validator->getValidated();

        // Send email
        $email = \Config\Services::email();
        $email->setFrom('form-test@freshways.net', 'form-test');
        $email->setTo('bassoliarturo@gmail.com'); // Set the recipient email here
        $email->setSubject('Form Submission');
        $email->setMessage('Form data: ' . print_r($validData, true));
        if ($email->send()) {
            log_message('info', 'Email sent successfully');
            // Set flashdata message
            session()->setFlashdata('success', 'Email sent successfully');
        } else {
            log_message('error', 'Failed to send email');
        }

        log_message('info', 'success is good');
        return redirect()->back(); // Redirect back to the form page
    }
}
