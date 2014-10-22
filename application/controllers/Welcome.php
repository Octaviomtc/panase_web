<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Academic Free License version 3.0
 *
 * This source file is subject to the Academic Free License (AFL 3.0) that is
 * bundled with this package in the files license_afl.txt / license_afl.rst.
 * It is also available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/AFL-3.0 Academic Free License (AFL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library("email");

        //cargamos la libreria email de ci
        $this->load->library("email");
        $this->load->helper('url');
        $this->load->view('welcome_message');
        //configuracion para gmail
        $configGmail = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'panase.contacto@gmail.com',
            'smtp_pass' => 'p@n01@s3',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );  


                    $this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[1000]');
                    $this->form_validation->set_rules('tel', 'tel', 'required');
                            $this->form_validation->set_rules('mail', 'mail', 'required|valid_email|max_length[300]');
                            $this->form_validation->set_rules('asunto', 'asunto', 'required|max_length[1000]');
                            $this->form_validation->set_rules('mensaje', 'mensaje', 'required|max_length[4000]');



                    if ($this->form_validation->run() == FALSE) // validation hasn't been passed
                    {
                      // redirect('welcome');
                    }
                    else // passed validation proceed to post success logic
                    {
                       // build array for the model


                                   $nombre = set_value('nombre');
                                   $mail = set_value('mail');
                                   $tel = set_value('tel');
                                   $asunto = set_value('asunto');
                                   $mensaje = set_value('mensaje');


                                    $this->email->initialize($configGmail);

                                    $this->email->from('Contacto Panase');
                                    $this->email->to($mail);
                                    $this->email->subject('CONTACTO PANASE: '.$asunto);
                                    $this->email->message('<b>Gracias por tu interés en PANASE. En breve un representante se pondrá en contacto contigo.</b><br><p><hr></p><b>Nombre:</b> '.$nombre.'<br><b>Correo:</b> '.$mail.'<br><b>Telefono:</b> '.$tel.'<br><b>Asusnto:</b> '.$asunto.'<br><b>Mensaje:</b> '.$mensaje);
                                    $this->email->send();


                                    $this->email->initialize($configGmail);

                                    $this->email->from('Contacto Panase');
                                    $this->email->to("panase.contacto@gmail.com");
                                    $this->email->subject('CONTACTO PANASE: '.$asunto);
                                    $this->email->message('<b>Nuevo correo de contacto.</b><br><p><hr></p><b>Nombre:</b> '.$nombre.'<br><b>Correo:</b> '.$mail.'<br><b>Telefono:</b> '.$tel.'<br><b>Asusnto:</b> '.$asunto.'<br><b>Mensaje:</b> '.$mensaje);
                                    $this->email->send();

                        redirect('welcome/mail');

                    }



	}

    public function mail(){
        $this->load->helper('url');
        $this->load->view('mail');
    }
 
   


}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */