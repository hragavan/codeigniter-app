<?php
class NewRegister extends CI_Controller {

 	function __construct()
 	{
		 parent::__construct();
		 $this->load->model('register','',TRUE);
 	}
 	function index()
 	{
		//This method will have the credentials validation
   		$this->load->library('form_validation');
   		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
   		$data['username']=$this->input->post("username");
    		$data['password']=MD5($this->input->post("password"));
   		$data['firstname']=$this->input->post("firstname");
		$data['lastname']=$this->input->post("lastname");
   		$data['emailID']=$this->input->post("email");
  
		$result=$this->register->add($data); 
   		if($result==true)
   		{
		   $this->load->view('welcome_message');
   		}
 	}
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
