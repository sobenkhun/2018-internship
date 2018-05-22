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
    /**
     * Get list all of student on supervisor dashboard
     * @param Variable $studentRole Identifier of student role
     * @param string $userRole store array of stuent role
     * @author Bunthean MOV <bunthean.mov2727@gmail.com>
     */
	public function getDataStudentList()
	{
		$this->db->select("id, CONCAT(firstname,' ',lastname) AS studentName");
		 $studentRole= 4;
		 $userRole=array('student.userrole_id'=>$studentRole);
		 $query =  $this->db->get_where('student',$userRole);
	     return $query->result_array(); 
	}
	/**
     * Get list all of student for supervisor complete the questionnaire 
     * @param Variable $studentRole Identifier of student role
     * @param string $userRole store array of stuent role
     * @author Bunthean MOV <bunthean.mov2727@gmail.com>
     */
	public function getDataCompleteQuestionnaire()
	{
		$this->db->select("id, CONCAT(firstname,' ',lastname) AS studentName");
		 $studentRole= 4;
		 $userRole=array('student.userrole_id'=>$studentRole);
		 $query =  $this->db->get_where('student',$userRole);
	     return $query->result_array(); 
	}
	/**
	 * Add questionnaire for student specific 
	 * @param array $data store all feild the table questionnaire 
	 * @param 
	 * @author Bunthean MOV <bunthean.mov2727@gmail.com>=====================================================
	 */
	public function getStuId($studentName)
    {
    	
         $this->db->select('id');
        $this->db->from('student');
        $this->db->where('id', $studentName);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
            {
                $stuId = $row['id'];
            }
            // var_dump($studentName);die();
        return $stuId;
    }
    public function addQuestionnaire($studentId,$gender,$q1,$major,$q2,$q3)
    {
        // $this->db->select("*");
        // $this->db->from("student");
        // $this->db->where('id', $student_id);
        // $query = $this->db->get();
    	$this->db->select("*");
        $this->db->from('questionnaire q');
        $this->db->join('student stu', 'q.student_id = stu.id');
        $this->db->join('supervisor s', 'stu.supervisor_id = s.id');
        $this->db->join('company c', 's.company_id = c.id');
        $this->db->where('stu.id', $studentId);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
        {
            $student_id = $row['id'];
        }
        $student_id = (int)$student_id;
       	$data = array('student_id' =>$student_id,
       			'gender'     =>$gender,
       			'question1'  =>$q1,
       			'major'      =>$major,
       			'question2'  =>$q2,
       			'question3'  =>$q3
       	);
       // var_dump($data);
        $this->db->insert('questionnaire', $data);
    }

    /**
	 * Select stuent's questionnaire to complete
	 * @param string $data store all feild the table questionnaire 
	 * @param 
	 * @author Bunthean MOV <bunthean.mov2727@gmail.com>
	 */
	public function getQuestionnaire($studentId)
	{
	$this->db->select("stu.id,stu.firstname, stu.lastname, c.name, q.*");
    $this->db->from('questionnaire q');
    $this->db->join('student stu', 'q.student_id = stu.id');
    $this->db->join('supervisor s', 'stu.supervisor_id = s.id');
    $this->db->join('company c', 's.company_id = c.id');
    $this->db->where('stu.id', $studentId);
    $query = $this->db->get();
    return $query->result_array();
	}
	
	public function getDataStudentDetail($studentId)
    {

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
}