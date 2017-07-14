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
        $query = $this->db->get_where('threads', array('id' => $id));
        return $query->row_array();
    }
}

 ?>
