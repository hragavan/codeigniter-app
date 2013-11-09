<?php

class activity extends CI_Model {

	function activity_list() {
		$activity = $this->db->get("activity");
		$ret = $activity->row();
		return $ret->Name;
	}

	function save_Activity($values) {
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		//$data = array();
		$date = date("Y-m-d");
		foreach ($values as $key => $value) {
			$activity = $value->activity;
			$time = $value->time;
			$time ? $time : 0;
			$this->db->query("insert into user_Activity_info values ('$username', '$date', '$activity',$time)");
		}
	}

	function activity_chart() {
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$date = date("Y-m-d");
		$list = $this->db->query("select * from user_Activity_info where username = '$username' and date = '$date'");

		if ($list->num_rows() > 0) {
			$return_arr = array();
			foreach ($list->result() as $row) {
				$row_array['activity'] = $row->activity;
				$row_array['time_spent'] = $row->time_spent;
				array_push($return_arr, $row_array);
			}
		}

		return $return_arr;
	}

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
