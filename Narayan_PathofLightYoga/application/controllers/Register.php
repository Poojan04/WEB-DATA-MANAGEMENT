<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class REgister extends CI_Controller {

	public function index()
{
        
 $this->load->view('layout/header');
 $this->load->view('layout/navbar');
        $this->load->model('Modelregister');
                $data['result'] = $this->Modelregister->get_register_details();

        $this->load->view('register',$data);

 $this->load->view('layout/footer');

}

public function data_submitted() {
        $checkbox_array = $this->input->post('qualification');
        $data = array(
            'std_name' => $this->input->post('std_name'),
            'std_email' => $this->input->post('std_email'),
            'std_password' => $this->input->post('password'),
            'std_gender' => $this->input->post('select'),
            'std_marital_status'=> $this->input->post('std_marital_status'),
            'std_qualification' => serialize($checkbox_array),
            'std_address' => $this->input->post('address'),
            'std_upload_file' => $this->input->post('file_upload')
        );
        $this->load->view("view_form", $data);
    }

}
