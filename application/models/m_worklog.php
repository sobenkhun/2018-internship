<?php 
	class m_worklog extends CI_Model {
		public function weeklyWorklog()
		 {
		 	$this->db->select('*');
		 	$query = $this->db->get('worklog');
		 	return $query->result_array();
		 }
	}
 ?>