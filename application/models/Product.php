<?php

class Product extends CI_Model
{
    function get_all_blog(){
		$result=$this->db->get('productos');
		return $result;
	}

	function search($title){
		$this->db->like('producto', $title , 'both');
		$this->db->order_by('producto', 'ASC');
		return $this->db->get('productos')->result();
	}
 
}