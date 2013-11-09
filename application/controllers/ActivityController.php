<?php

class ActivityController extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('activity', '', TRUE);
	}

	function save() {
		$formData = $this->input->post('data');
		$d = json_decode($formData);
		$result = $this->activity->save_Activity($d);
	}

	function chart() {
		$activityList_array = $this->activity->activity_chart();
		$activityList_array = array_values($activityList_array);

		$string = '{
			"cols":[
					{"id":"","label":"Activity","pattern":"","type":"string"},
					{"id":"","label":"Time Spent","pattern":"","type":"number"},
				   ],			
				   "rows":[
					';
		foreach ($activityList_array as $key => $value) {
			$arr = array_values($value);

			//	echo $a['activity']."->".$a['time_spent'];
			$string.='{
						 "c":[
							 {"v":"' . $arr[0] . '"},
							 {"v":' . $arr[1] . '}
							 ]
							 },';



			//echo "<br/>";
		}
		$string.=']
					}';
		/*  '{
		  "c":[
		  {"v":"Work"},
		  {"v":3}
		  ]
		  },
		  {
		  "c":[
		  {"v":"sleep"},
		  {"v":8}
		  ]
		  },
		  {
		  "c":[
		  {"v":"Eat"},
		  {"v":2}
		  ]
		  },
		  ]
		  }'; */
		$stringtest = '{
			"cols":[
					{"id":"","label":"Activity","pattern":"","type":"string"},
					{"id":"","label":"Time Spent","pattern":"","type":"number"},
				   ],
			"rows":[
				   {
					"c":[
						{"v":"Work"},
						{"v":3}
						]
					},
					{
					"c":[
						{"v":"sleep"},
						{"v":8}
						]	
					},
					{
					"c":[
						{"v":"Eat"},
						{"v":2}
						]	
					},
					]
					}';
		echo json_encode($string);
	}

	function load_chart() {
		$this->load->view('chart.phtml');
	}

}

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
