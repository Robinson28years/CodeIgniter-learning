<?php
/**
 *
 */
class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function login()
    {
        // var_dump($this->session->name);
        // if ($this->session->email != NULL) {
        //     redirect('/forum');
        // }
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $data['title'] = '登录';

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header',$data);
            $this->load->view('user/login',$data);
            $this->load->view('templates/footer');
        }
        else {
            if ($this->user_model->verirf_user() === FALSE) {
                // var_dump($this->user_model->verirf_user());
                redirect('/user/login');
            }
            else {
                $email = $this->input->post('email');
                $user = $this->user_model->get_user($email);
                // var_dump($user);
                $this->session->set_userdata($user);

                redirect('/forum');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('forum');
    }
}
