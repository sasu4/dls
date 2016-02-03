<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *    http://example.com/index.php/welcome
     *  - or -
     *    http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('header2');
        $this->load->view('navigation2');
        $this->load->view('contact');
        $this->load->view('footer2');
    }
    
    public function sent() {
        $this->load->library('email');
        $mail = $this->input->post('email');
        $name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');
        $this->email->from($mail,$name.' '.$surname);
        $this->email->to($this->config->item('DX_webmaster_email'));
        
        $this->email->subject('Kontaktný formulár - '.$subject);
        $this->email->message($message);
        
        $this->email->send();
        
        $this->load->view('header2');
        $this->load->view('navigation2');
        $this->load->view('contact_sent');
        $this->load->view('footer2');
    }
    

}
