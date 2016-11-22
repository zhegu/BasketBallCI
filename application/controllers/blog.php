<?php
class Blog extends CI_Controller {
    function index() {
        echo 'haha';
       $this->load->view('blogview');
    }
}