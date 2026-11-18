<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    private $_table = "users";

    public function doLogin() {
        $post = $this->input->post();

        $user = $this->db->get_where($this->_table, ["username" => $post["username"]])->row();

        if ($user) {
            $isPasswordTrue = ($post["password"] === $user->password) || password_verify($post["password"], $user->password);
            $isAdmin = $user->role == "admin";

            if ($isPasswordTrue && $isAdmin) {
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
        }
        
        return false;
    }

    public function isNotLogin() {
        return $this->session->userdata('user_logged') === null;
    }
}

