<?php

class Perfiles extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function envio()
    {
        //SMTP & mail configuration
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'desarrollo.tsjmorelos@gmail.com',
            'smtp_pass' => 'qffckzhmbutpeizd',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n",
            'crlf' => "\r\n",
            'priority' => 1,
            'wordwrap' => TRUE,
            'validate' => true
        );

        $htmlContent = '<h1>HTML email testing by CodeIgniter Email Library</h1>';
        $htmlContent .= '<p>You can use any HTML tags and content in this email.</p>';

        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to('eduardo.dritec@gmail.com');
        $this->email->from('desarrollo.tsjmorelos@gmail.com','MisPRacticas');
        $this->email->subject('Test Email (HTML)');
        $this->email->message($htmlContent);
        $this->email->send();
    }
}