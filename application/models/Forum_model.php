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
        $query = $this->db->select('threads.id, threads.title, threads.body, users.name')
                            ->from('threads')
                            ->from('users')
                            ->where('threads.id', $id)
                            ->where('threads.user_id = users.id')
                            ->get();
                            // var_dump($query->row_array());
        return $query->row_array();
    }


    public function set_threads()
    {
        $data = array(
            'user_id' => $this->session->id,
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );

        return $this->db->insert('threads', $data);
    }

    public function update_threads($id)
    {
        $data = array(
            'id' => $id,
            'user_id' => $this->session->id,
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );

        $this->db->replace('threads', $data);
    }

    public function get_replies($id)
    {
        $query = $this->db->select('users.name, replies.body')
                            ->from('replies')
                            ->from('users')
                            ->where('replies.thread_id', $id)
                            ->where('users.id = replies.user_id')
                            ->get();
                            // var_dump($query->result_array());
        return $query->result_array();
    }

    public function set_replies($id)
    {
        $data = array(
            'user_id' => $this->session->id,
            'thread_id' => $id,
            'body' => $this->input->post('body')
        );

        return $this->db->insert('replies', $data);
    }
}

 ?>
