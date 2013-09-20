<?php


class ActivityController extends CI_Controller {
function __construct()
 {
   parent::__construct();
  $this->load->model('activity','',TRUE);
 }
	
	function index()
	{	
	 
	 $result=$this->activity->save_Activity($this->input->post()); 
		
	}
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
