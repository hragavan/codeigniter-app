<?php
class NewRegister extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('register','',TRUE);
    $this->load->model('activity','',TRUE);
 }
 function index()
 {
   //This method will have the credentials validation
   $this->load->helper(array('form', 'url'));

   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
   
  if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login_view.phtml');
		}
		else
		{
			$data['username']=$this->input->post("username");
			$data['password']=MD5($this->input->post("password"));
			$data['firstname']=$this->input->post("firstname");
			$data['lastname']=$this->input->post("lastname");
   $data['emailID']=$this->input->post("email");
   $result=$this->register->add($data);
   if($result==true)
   {
	   $data['activity']=$this->activity->activity_list();	
	   $this->load->view('welcome_message.phtml',$data);
   }
			
		}
    
  
 }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
