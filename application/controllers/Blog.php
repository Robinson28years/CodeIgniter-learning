<?php
/**
 *
 */
class Blog extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'aaaaaaaaa',
            'text' => 'bbbbbbbbb'
        );
        $this->load->view('blog/blogview', $data);
    }
    public function test()
    {
        echo "asdfasdfas";
    }
}

 ?>
