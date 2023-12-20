<?php

defined("BASEPATH") or exit("Not allowed");

class Login extends CI_Controller
{

    public function authenticate()
    {
        if ($this->input->post()) {

            $this->form_validation->set_rules("email", "email", "required|valid_email");
            $this->form_validation->set_rules("password", "password", "required");
            $this->form_validation->set_rules("user_type", "Login as", "required|callback_check_login_as");

            if ($this->form_validation->run() == false) {
                $this->load->view("login");
            } else {
                echo $this->input->post("user_type");
                echo $this->input->post("email") . " " . $this->input->post("password");
            }
        }
    }


    public function check_login_as($value)
    {
        // Custom validation rule callback
        // Check if the selected value is not equal to "Login as"
        if ($value == "Login as") {
            $this->form_validation->set_message('check_login_as', 'Please select a valid user type.');
            return false;
        }
        return true;
    }
}
