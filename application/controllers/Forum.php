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
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
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
        $data['replies'] = $this->forum_model->get_replies($id);
        $data['title'] = '讨论';

        $this->load->view('templates/header', $data);
        $this->load->view('forum/view',$data);
        $this->load->view('templates/footer');
    }
    public function create()
    {


        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        $data['title'] = '创建帖子';

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('forum/create',$data);
            $this->load->view('templates/footer');
        }
        else {
            $this->forum_model->set_threads();
            redirect('/forum');
        }
    }
    public function update($id)
    {


        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        $data['title'] = '更新帖子';

        if ($this->form_validation->run() === FALSE) {
            $data['thread'] = $this->forum_model->get_threads($id);
            $this->load->view('templates/header',$data);
            $this->load->view('forum/update',$data);
            $this->load->view('templates/footer');
        }
        else {
            $this->forum_model->update_threads($id);
            redirect('/forum/view/'.$id);
        }
    }

    public function reply($id)
    {
        $this->form_validation->set_rules('body', 'Body', 'required');
        if ($this->form_validation->run() === true) {
            $this->forum_model->set_replies($id);
            redirect('/forum/view/'.$id);
        }
    }
}
