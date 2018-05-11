<?php
/**
 * This model contains the business logic and manages the persistence of users and roles
 * @copyright  Copyright (c) 2018 Bunthean MOV
 */
if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

/**
 * This model contains the business logic and manages the persistence of users and roles
 * It is also used by the session controller for the authentication.
 */
class Supervisor_model extends CI_Model {

    /**
     * Default constructor
     */
    public function __construct() {

    }
	public function getDataStudentList()
	{
		$this->db->select("id, CONCAT(firstname,' ',lastname) AS studentName");
		 $studentRole= 4;
		 $userRole=array('student.userrole_id'=>$studentRole);
		 $query =  $this->db->get_where('student',$userRole);
	     return $query->result_array(); 
	}
	public function getDataCompleteQuestionnaire()
	{
		$this->db->select("id, CONCAT(firstname,' ',lastname) AS studentName");
		 $studentRole= 4;
		 $userRole=array('student.userrole_id'=>$studentRole);
		 $query =  $this->db->get_where('student',$userRole);
	     return $query->result_array(); 
	}
	public function getQuestionnaire()
	{
		$query = "Hello getQuestionnaire";
	     return $query; 
	}
	 public function getDataSudentDetail($studentId)
    {
        $this->db->select("student.firstname, 
							student.lastname AS studentName, 
							company.url, 
							CONCAT(tutor.firstname,' ',tutor.lastname) AS tutorName, 
							student.batch, 
							student.year, 
							student.schoolemail, 
							student.peremail, 
							student.phone");
		$this->db->join('tutor','tutor.id = student.id');
		$this->db->join('company','company.id = student.id');
        // $this
        $query = $this->db->get_where('student', array('id' => $studentId ));
        return $query->result_array();
    }
// 	public function getDataSudentDetail()
// 	{
// 		$this->db->select("student.firstname, 
// 		student.lastname, 
// 		company.url, 
// 		CONCAT(tutor.firstname,' ',tutor.lastname) AS tutorName, 
// 		student.batch, 
// 		student.year, 
// 		student.schoolemail, 
// 		student.peremail, 
// 		student.phone");

// 		$this->db->join('tutor','tutor.id = student.id');
// 		$this->db->join('company','company.id = student.id');
// 		$this->db->where('id'= $student);
// 		// $studentRole = 4; 
// 		// $tutorRole = 2; 
// 		$this->db->select('book_id, book_name, author_name, category_name');
// 		$this->db->from('books');
// 		$this->db->join('category', 'category.category_id = books.category_id');
// 		$this->db->where('category_name', 'Self Development');
// 		$query = $this->db->get();


// 		// $studentUserRole = array('student.userrole_id' => $studentRole, 'student.userid' => $tutorRole);
// // lvb;sd;ld;b
// 		// $array = array('internship_users.userrole_id' => $studentRole, 'internship_users.userrole_id' => $tutorRole);
// 		// $this->db->where($array);


// 		$query =  $this->db->get('student');
// 		return $query ->result_array();
// 	}
}