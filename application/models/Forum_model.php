<?php
/**
 *
 */
class Forum_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function get_threads($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('threads');
            return $query->result_array();
        }
        $query = $this->db->select('*')
                            ->from('threads')
                            ->from('users')
                            ->where('threads.id', $id)
                            ->where('users.id = threads.user_id')
                            ->get();
        return $query->row_array();
    }
}

 ?>
