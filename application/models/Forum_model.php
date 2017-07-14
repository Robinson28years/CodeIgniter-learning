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


    public function set_threads()
    {
        $data = array(
            'user_id' => 1,
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );

        return $this->db->insert('threads', $data);
    }

    public function update_threads($id)
    {
        $data = array(
            'id' => $id,
            'user_id' => 1,
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );

        $this->db->replace('threads', $data);



    }

    public function get_replies($id)
    {
        $query = $this->db->get_where('replies',array('thread_id' => $id));
        return $query->result_array();
    }
}

 ?>
