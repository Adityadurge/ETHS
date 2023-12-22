<?php
defined("BASEPATH") or exit("Not allowed");
class Authenticate extends CI_Model
{

    public function authenticate($data)
    {
        $dbdata = $this->db->where("Email", $data["Email"])->get($data["User"]);
        $dbdata = $dbdata->row();
        // echo "<pre>";
        // print_r($dbdata);
        if ($dbdata) {
            if (password_verify($data["Password"], $dbdata->Password)) {
                return ["Status" => True, "Message" => "Password Matched"];
            } else {
                return ["Status" => False, "Message" => "Please enter correct password"];
            }
        } else {
            return ["Status" => False, "Message" => "User does not exist"];
        }

    }

    public function updateLoginToken($data, $token)
    {
        $post = ["Token" => $token];
        $r = $this->db->where("Email", $data["Email"])->update($data["User"], $post);
        return $r;
    }
}
?>