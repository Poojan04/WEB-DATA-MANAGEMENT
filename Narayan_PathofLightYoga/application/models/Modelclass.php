<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelclass extends CI_Model {
         public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function get_all_classes()
{
        $this->load->database();
     
 $query = "SELECT classname, classdescription FROM class";

$result=$this->db->query($query)->result();

    return $result;

   
}
}
