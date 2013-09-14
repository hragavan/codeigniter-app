<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

<<<<<<< HEAD
    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->helper('url');
        $this->load->helper(array('form'));
        $this->load->view('login_view');
    }
=======
 	function __construct()
 	{
		parent::__construct();
 	}

	function index()
 	{
		$this->load->helper('url');
   		$this->load->helper(array('form'));
   		$this->load->view('login_view');
 	}
>>>>>>> c71e86ff3342d22540806188a055f5b00419f322

}

?>
