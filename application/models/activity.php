<?php

class activity extends CI_Model{
 function activity_list()
 {
	 $activity=$this->db->get("activity");
	 $ret= $activity->row();
	 return $ret->Name;
 }
 function save_Activity($values)
 {
	 $session_data = $this->session->userdata('logged_in');
     $username=$session_data['username'];
	 //$data = array();
	 $date = date("Y-m-d");
	foreach($this->input->post() as $key => $value)
	{
	$this->db->query("insert into user_Activity_info values ('$username', '$date', '$key',$value)");
		
	}
 }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
