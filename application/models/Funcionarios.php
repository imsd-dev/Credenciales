<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Model{

 	function __construct(){
        parent::__construct();
        $this->load->database();            
    }

    function datos_user($rut)     {
          $this->db->select('*');      
          $this->db->where('rut', $rut);
          $query = $this->db->get('sistemas_users');
          if($query->num_rows() > 0){
            return $query->row();
             
          }else{
            return false;
          }
     }



}