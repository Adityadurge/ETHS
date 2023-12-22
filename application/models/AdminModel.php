<?php
defined("BASEPATH") or exit("not allowed");

class AdminModel extends CI_Model
{
    public function add_clinic($data)
    {
        $this->load->library("Uuid");
         $data["Clinic_Id"]="Clinic_".$this->uuid->v4();
           
            $data["Password"]=password_hash($data["Password"],PASSWORD_BCRYPT);
          
        $r=$this->db->where("Email",$data["Email"])->get("Clinic")->row();
        if($r)
        {
            $response=["Status"=>"error","Message"=>"Email already exists"];
            $this->session->set_flashdata("Response",$response);
        }
        else
        {
            $this->db->insert("Clinic",$data);
            $response=["Status"=>"ok","Message"=>"Clinic Added Successfully"];
            $this->session->set_flashdata("Response",$response);
        }
        return $response;
    }
}
?>