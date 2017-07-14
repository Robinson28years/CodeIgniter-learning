<?php
/**
 *
 */
class Forum extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('forum_model');
    }
    public function index()
    {
        $data['threads'] = $this->forum_model->get_threads();
        $data['title'] = '论坛首页';

        $this->load->view('templates/header', $data);
        $this->load->view('forum/index',$data);
        $this->load->view('templates/footer');

    }
    public function view($id)
    {
        $data['thread'] = $this->forum_model->get_threads($id);
        $data['title'] = '讨论';

        $this->load->view('templates/header', $data);
        $this->load->view('forum/view',$data);
        $this->load->view('templates/footer');
    }
}
