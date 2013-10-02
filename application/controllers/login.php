<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 function index()
 {
	 $this->load->helper('url');
   $this->load->helper(array('form'));
   $this->load->view('login_view.phtml');
 }
 
 

}

?>
