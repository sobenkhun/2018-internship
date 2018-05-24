<?php 
	class m_worklog extends CI_Model {
		public function weeklyWorklog()
		{
			$this->db->select('*');
			$query = $this->db->get('worklog');
			return $query->result_array();
		}
		// get comment display
		public function getComment(){
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
		
		// select Test date in DB
		public function selectDateTime(){
			// $this->db->select('*');
			// $Datequery = $this->db->query('SELECT date_format(date, "%W") FROM worklog group by "Day of the week" order by date_format(date,"%W")');		
			// if($Datequery == date_format("Friday")){
				$query=$this->db->query('SELECT date_format(date, "%D %W %M %Y %V"), count(*) FROM worklog group by week');
				$result = $query->result();
				print_r($result);
			// }
				
			// $this->db->select('*')->from('worklog')->where(month("2018-06-15"));
				// $this->db->select();
				// $this->db->count(date);
				// $this->db->get('worklog');
				// $this->orderby(date_format(date,"%W"));
			// select date_format(date, "%W") AS `Day of the week`, count(date)
			// from worklog
			// group by `Day of the week` 
			// order by date_format(date, "%w");
		}

		public function selectDateTime1()
		{

			$this->db->select('*')->from('worklog')->where("date BETWEEN '2018-06-1' AND '2018-06-7'", NULL, FALSE);
			$query = $this->db->get();
			$result = $query->result();
			print_r($result);
			// $this->db->select('*');
			// $this->db->where("date BETWEEN '2018-06-1' AND '2018-06-7'", NULL, FALSE);
			// $query = $this->db->get('worklog');
			// $result = $query->result();
			// print_r($result);
			// if (){
			// echo $this->db->limit(10,20)->get_compiled_select('worklog', FALSE);
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