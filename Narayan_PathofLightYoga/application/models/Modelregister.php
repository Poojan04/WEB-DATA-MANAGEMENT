<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelregister extends CI_Model {
         public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        

        public function get_register_details()
{
        $this->load->database();
     
  $query = "SELECT c.classname, t.time,d.daysid from schedule s
INNER JOIN class c on s.classid= c.classid 
INNER JOIN time t on s.timeid=t.timeid
inner join days d on s.daysid=d.daysid
ORDER by d.daysid;";

$result=$this->db->query($query)->result();
return $result;

   
}
}
