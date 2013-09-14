<?php
Class register extends CI_Model
{
 function add($data)
 {
	   if($this->db->insert("user_details", $data))
          return true;
        else
          return false;
 }
}
?>
