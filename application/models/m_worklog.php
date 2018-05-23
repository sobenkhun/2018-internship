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
			
			$this->db->select('*');
			$this->db->where("date BETWEEN '2018-06-1' AND '2018-06-7'", NULL, FALSE);
			$query = $this->db->get('worklog');
			$result = $query->result();
			print_r($result);
			// if (){
				$nextWeek = time() + (7 * 24 * 60 * 60);
				                   // 7 days; 24 hours; 60 mins; 60 secs
				echo '<br>Now:       '. date('Y-m-d') ."\n";
				echo '<br>Next Week: '. date('Y-m-d', $nextWeek) ."\n";
				// or using strtotime():
				echo '<br>Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";
			// }
				$period = array (" second", " minute", " hour", " day", " month", " year");

		}
		// ==========
	}
 ?>