<?php
Class upload extends CI_Controller
{
     function __construct() {
        parent::__construct();
        $this->load->model('profilePic', '', TRUE);
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $this->load->view('profilePage.phtml', array('error' => ' ' ));
       // $this->load->view('profilePage.phtml');
    }
    public function doupload()
    {
   
   $config['upload_path'] = './application/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
echo $_SERVER['CONTENT_LENGTH'];
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('profilePage.phtml', $error);
		}
		else
		{
           // print_r($this->upload->data());
			//$data = array('upload_data' => $this->upload->data());
            $result['filepath'] = $this->profilePic->save($this->upload->data());
			$this->load->view('upload_success.phtml', $result);
		}
    }
}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
