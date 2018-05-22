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
		    	'workactivities'=> $activitiess,
		    	'youhavelearn' 	=> $Learner,  
		    	'issues' 		=> $Issoues,  
		    	'solutions' 	=> $Solution,
		    	'todo' 			=> $Todo,
		    	'comment' 		=> $Comment
		    ); 
		    $this->db->insert('worklog', $data);
		    
		}
	}
 ?>