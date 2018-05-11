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
		$this->db->select("userid, CONCAT(firstname,' ',lastname) AS studentName");
		 $studentRole= 4;
		 $userRole=array('internship_users.userrole_id'=>$studentRole);
		 $query =  $this->db->get_where('internship_users',$userRole);
	     return $query->result_array(); 
	}
	public function getDataCompleteQuestionnaire()
	{
		$this->db->select("userid, CONCAT(firstname,' ',lastname) AS studentName");
		 $studentRole= 4;
		 $userRole=array('internship_users.userrole_id'=>$studentRole);
		 $query =  $this->db->get_where('internship_users',$userRole);
	     return $query->result_array(); 
	}
	public function getDataSudentDetail()
	{
		$this->db->select("internship_users.firstname, 
		internship_users.lastname, 
		internship_company.url, 
		CONCAT(internship_users.firstname,' ',internship_users.lastname) AS tutorName, 
		internship_users.batch, 
		internship_users.year, 
		internship_users.schoolemail, 
		internship_users.emailpro, 
		internship_users.phonenumber");

		$this->db->join('internship_company','internship_company.id = internship_users.userid');
		$studentRole = 4; 
		$tutorRole = 2; 

		$studentUserRole = array('internship_users.userrole_id' => $studentRole, 'internship_users.userid' => $tutorRole);
// lvb;sd;ld;b
		// $array = array('internship_users.userrole_id' => $studentRole, 'internship_users.userrole_id' => $tutorRole);
		// $this->db->where($array);


		$query =  $this->db->get_where('internship_users', $studentUserRole);
		return $query ->result_array();
	}
}