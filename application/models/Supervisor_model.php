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

    public function questionnaire($stuId)
    {
		 $this->db->select("s.id,s.firstname as stuFName,s.lastname as stuLName,
		                        s.phone,s.peremail,s.schoolemail,s.batch,s.year,s.username,s.password,
		                        su.firstname as suFName,su.lastname as suLName,
		                        c.name,
		                        t.firstname as tFName,t.lastname as tLName");
		 $this->db->from('supervisor su');
		 $this->db->join('student s', 's.supervisor_id = su.id');
		 $this->db->join('company c', 'c.id = su.company_id');
		 $this->db->join('tutor t', 't.company_id = c.id');
		 $this->db->where('s.id', $stuId);
		$query = $this->db->get();
		 return $query->result_array(); 


        // $this->db->select("id");
        // $this->db->from("company");
        // $this->db->where('name', $company);
        // $query = $this->db->get();
        // $company_id = $query->result_array();
        // $company_id = (int)$company_id;
        // $data = array('firstname'=>$firstname,
        //              'lastname'=>$lastname,
        //              'position'=>$position,
        //              'username' =>$username,
        //              'password' =>$password,
        //              'company_id' =>$company_id,
        //              'email'=>$sEmail,
        //              'phone'=>$phone,
        //              'userrole_id'=>'2' 
        //          );
        // $this->db->insert('tutor', $data);
    }
	public function getQuestionnaire()
	{
		$query = "Hello getQuestionnaire";
	     return $query; 
	}
	
	public function getDataStudentDetail($studentId)
    {
    // 	 $this->db->select(" 
				// 	s.firstname,
				// 	s.lastname,
				// 	c.url,
    // 	 			CONCAT(t.firstname,' ', t.lastname) AS tutorName,
    // 	 			CONCAT(s.firstname,' ', s.lastname) AS studentName,
    // 	 			s.batch,
    // 	 			s.year,
    // 	 			s.schoolemail,
    // 	 			s.peremail,
    // 	 			s.phone");
    //  $this->db->from('supervisor su');
    //  $this->db->join('student s', 's.supervisor_id = su.id');
    //  $this->db->join('company c', 'c.id = su.company_id');
    //  $this->db->join('tutor t', 't.company_id = c.id');
    //  $this->db->where('s.id', $studentId);
    // $query = $this->db->get();
    // return $query->result_array(); 

    	$this->db->select("*");
    	$this->db->from("student");
    	$this->db->where('student.id', $studentId);
    	$query = $this->db->get();
    	return $query-> result_array();

    }

    public function countStudent()
    {
        $this->db->select('*');
        $query = $this->db->get('student');
        return $query->num_rows();
    }
    // Add questionnaire
 
    // public function addTutor($company,$firstname,$lastname,$username,$password,$position,$sEmail,$phone)
    // {
    //     $this->db->select("id");
    //     $this->db->from("company");
    //     $this->db->where('name', $company);
    //     $query = $this->db->get();
    //     $company_id = $query->result_array();
    //     $company_id = (int)$company_id;
    //     $data = array('firstname'=>$firstname,
    //                  'lastname'=>$lastname,
    //                  'position'=>$position,
    //                  'username' =>$username,
    //                  'password' =>$password,
    //                  'company_id' =>$company_id,
    //                  'email'=>$sEmail,
    //                  'phone'=>$phone,
    //                  'userrole_id'=>'2' 
    //              );
    //     $this->db->insert('tutor', $data);
    // }
}