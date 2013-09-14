<?php

class activity extends CI_Model {

    function activity_list() {
        $activity = $this->db->get("activity");
        $ret = $activity->row();
        return $ret->Name;
    }

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
