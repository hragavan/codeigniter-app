<?php

Class profilePic extends CI_Model {

    public function save($data = array())
    {

       
     /*  $data = array(
          'filename' => $data['file_name'],
          'fullpath' => $data['full_path']
      );*/
       $filePath = $data['file_name'];$username = $this->session->userdata['logged_in']['username'];
     //   print_r($data);
      //$this->db->insert('bedrijfimages', $data);
$query = "update user_details set picture = '$filePath' where username = '$username'";
 $this->db->query($query);
 return $filePath;

}
    }

