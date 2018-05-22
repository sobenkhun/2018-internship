<?php 
	class m_worklog extends CI_Model {
		public function weeklyWorklog()
		{
			$this->db->select('*');
			$query = $this->db->get('worklog');
			return $query->result_array();
		}
		public function getReport($Date,$startTime,$endTime,$activities,$Learner,$Issoues,$Solution,$Todo,$Comment)
		{

		    $data = array(  
		    	'date'     		=> $Date,
		    	'starttime' 	=> $startTime,
		    	'endtime'   	=> $endTime,  
		    	'workactivities'=> $activities,
		    	'youhavelearn' 	=> $Learner,  
		    	'issues' 		=> $Issoues,  
		    	'solutions' 	=> $Solution,
		    	'todo' 			=> $Todo,
		    	'comment' 		=> $Comment
		    ); 
		    $this->db->insert('worklog', $data);
		    
		}

		// edit
		public function updateWorklog($Id,$Date,$startTime,$endTime,$workActivities,$Learner,$Issoues,$Solution,$toDo,$Comment)
		{
			$data = array(
				'id'=>$Id,
				'date'     		=> $Date,
		    	'starttime' 	=> $startTime,
		    	'endtime'   	=> $endTime,  
		    	'workactivities'=> $workActivities,
		    	'youhavelearn' 	=> $Learner,  
		    	'issues' 		=> $Issoues,  
		    	'solutions' 	=> $Solution,
		    	'todo' 			=> $toDo,
		    	'comment' 		=> $Comment
			);
			$this->db->where('id', $Id);
			$this->db->update('worklog', $data);
		}

		// select date in DB
		public function selectDateTime()
		{
			// $this->db->SELECT('*');
			// $this->db->FROM('worklog');
			// $this->db->WHERE('date');
			// $this->db->BETWEEN('2018-04-23' AND '2018-04-27')
			// $query = $this->db->get_where('worklog', 'date' BETWEEN '2018-04-23' AND '2018-04-27'));
			// return $query->result_array();

			// $this->db->select('*');
			// $this->db->from('worklog');
			// $this->db->where('starttime >=', $start_deadline);
			// $this->db->where('endtime <=', $end_deadline);
			// $query = $this->db->get();
			// $result = $query->result();
			// print_r($result);
			$this->db->select('*');
			$query = $this->db->get('worklog');
			// $this->db->where('`date` BETWEEN 2018-04-23 AND 2018-04-24', NULL, FALSE);
			$result = $query->result();
			print_r($result);

			// if ($query->num_rows() > 0) {
			// 	foreach ($query->result() as $row) {
			// 	}
			// }

			// $this->db->select('*');
			// $this->db->from('worklog');
			// $this-> db ->where('date' between $start_deadline and $end_deadline);
		}
	}
 ?>