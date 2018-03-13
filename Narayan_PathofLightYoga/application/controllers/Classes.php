<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller {

	public function index()
{
        
 $this->load->view('layout/header');
 $this->load->view('layout/navbar');
        $this->load->model('Modelclass');
                $data['result'] = $this->Modelclass->get_all_classes();

        $this->load->view('classes',$data);

 $this->load->view('layout/footer');

}
}
