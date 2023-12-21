<?php


defined("BASEPATH") or exit("not allowed");

class Admin extends CI_Controller
{


    var $userRow;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Authenticate');

        if ($this->session->userdata('token')) {
            $this->userRow = $this->db->query("SELECT * FROM Admin WHERE Token='" . $this->session->userdata('token') . "'")->row();
            if (!$this->userRow)
                redirect("Home");
        } else
            redirect("Home");
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
        $this->header("Add user");
        $this->load->view("AdminDash/add");
        $this->load->view('AdminDash/footer');
    }
}
