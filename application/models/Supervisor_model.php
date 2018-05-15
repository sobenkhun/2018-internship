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
	 public function addCompany($name,$address,$phone,$description,$location,$url)
    {
        $data = array('name'=>$name,
                     'itemdescription'=>$description,
                     'postaladdress'=>$address,
                     'location'=>$location,
                     'phone'=>$phone,
                     'url'=>$url);
                     $this->db->insert('company',$data);
    }
	public function getQuestionnaire()
	{
		$query = "Hello getQuestionnaire";
	     return $query; 
	}
	 public function getDataStudentDetail($studentId)
    {
    	 $this->db->select(" 
					s.firstname,
					s.lastname,
					c.url,
    	 			CONCAT(t.firstname,' ', t.lastname) AS tutorName,
    	 			CONCAT(s.firstname,' ', s.lastname) AS studentName,
    	 			s.batch,
    	 			s.year,
    	 			s.schoolemail,
    	 			s.peremail,
    	 			s.phone");
     $this->db->from('supervisor su');
     $this->db->join('student s', 's.supervisor_id = su.id');
     $this->db->join('company c', 'c.id = su.company_id');
     $this->db->join('tutor t', 't.company_id = c.id');
     $this->db->where('s.id', $studentId);
    $query = $this->db->get();
     // if($query->num_rows()>0){
     //      return $query->result_array();
     //      }else{
     //          return $query->result_array();
     //      }
     return $query->result(); 

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