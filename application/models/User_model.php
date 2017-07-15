<?php
/**
 *
 */
class User_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function verirf_user()
    {
        $password = $this->input->post('password');
        $hash = $this->db->select('password')
                            ->from('users')
                            ->where('email', $this->input->post('email'))
                            ->get()
                            ->row_array();

        // var_dump($password);
        // var_dump($hash['password']);
         $result = password_verify($password, $hash['password']);
         return $result;
    }

    public function get_user($email)
    {
        $user = $this->db->get_where('users', array('email' => $email));
        return $user->row_array();
    }
}
