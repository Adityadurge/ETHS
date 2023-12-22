<?php


defined("BASEPATH") or exit("not allowed");

class Admin extends CI_Controller
{


    var $userRow;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Authenticate');
        $this->load->model('AdminModel');

        if ($this->session->userdata('token')) {
            $this->userRow = $this->db->query("SELECT * FROM Admin WHERE Token='" . $this->session->userdata('token') . "'")->row();
            if (!$this->userRow)
                redirect("Home/login");
        } else
            redirect("Home/login");
    }

    public function index()
    {
        $this->header("Dashboard");
        $this->load->view('AdminDash/dashboard');
        $this->load->view('AdminDash/footer');
        // print_r($this->userRow);
    }


    public function header($title = "")
    {
        $data['title'] = $title;
        $data['user'] = $this->userRow;
        $this->load->view('AdminDash/header', $data);
        $this->load->view('AdminDash/menu', $data);
    }

    public function add()
    {
        if ($this->input->post()) {

            $this->form_validation->set_rules("Email", "email", "required|valid_email|trim");
            $this->form_validation->set_rules("Password", "password", "required|trim");
            $this->form_validation->set_rules("Name", "name", "required|trim");
            $this->form_validation->set_rules("Reg_No", "registration", "required|trim");
            $this->form_validation->set_rules("Address", "address", "required|trim|max_length[100]");
            $this->form_validation->set_rules("Mobile", "mobile", "required|exact_length[10]|trim");


            if ($this->form_validation->run() == false) {
                $this->add();
            } else {


                $data = $this->input->post();
                $response = $this->AdminModel->add_clinic($this->input->post());
                $this->session->set_flashdata("Response", $response);
                if ($response["Status"] == "ok") {
                    // $this->load->view("AdminDash/add");
                    redirect("Admin/add");

                } else {
                    $data=["data"=>$data];
                    // print_r($data);
                    $this->header("Add user");
                    $this->load->view("AdminDash/add", $data);
                    $this->load->view('AdminDash/footer');
                }
            }
        }
        else
        {
            $this->header("Add user");
            $this->load->view("AdminDash/add");
            $this->load->view('AdminDash/footer');

        }

        
      
        
    }


    public function add_clinic()
    {
       
    }
}