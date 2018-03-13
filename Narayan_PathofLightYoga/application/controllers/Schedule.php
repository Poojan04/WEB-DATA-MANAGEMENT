<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	public function index()
{
        
 $this->load->view('layout/header');
 $this->load->view('layout/navbar');

    $this->load->model('Modelschedule');
                $data['result'] = $this->Modelschedule->get_schedule();
 $this->load->view('schedule',$data);


 $this->load->view('layout/footer');

}
}
