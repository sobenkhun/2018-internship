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
    public function addQuestionnaire($studentId,$gender,$q1,$major,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17)
    {
    	$this->db->select("q.*");
        $this->db->from('questionnaire q');
        $this->db->join('student stu', 'q.student_id = stu.id');
        $this->db->join('supervisor s', 'stu.supervisor_id = s.id');
        $this->db->join('company c', 's.company_id = c.id');
        $this->db->where('q.student_id', $studentId);
        $query = $this->db->get();
        foreach ($query->result_array() as $row)
        {
            $student_id = $row['id'];
        }
        // 'student_id'   =>$student_id,
       	$data = array('gender'     =>$gender,
		       			'question1'  =>$q1,
		       			'major'      =>$major,
		       			'question2'  =>$q2,
		       			'question3'  =>$q3,
		       			'question4'  =>$q4,
		       			'question5'  =>$q5,
		       			'question6'  =>$q6,
		       			'question7'  =>$q7,
		       			'question8'  =>$q8,
		       			'question9'  =>$q9,
		       			'question10' =>$q10,
		       			'question11' =>$q11,
		       			'question12' =>$q12,
		       			'question13' =>$q13,
		       			'question14' =>$q14,
		       			'question15' =>$q15,
		       			'question16' =>$q16,
		       			'question17' =>$q17);
        $this->db->insert('questionnaire', $data);
    }

   

    public function saveQuestionnaire($student_id,$sex,$major,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17)
    {
        $data = array('student_id' =>$student_id,
                    'gender'=>$sex,
                    'major'=>$major,
                    'question1'=>$q1,
                    'question2'=>$q2,
                    'question3'=>$q3,
                    'question4'=>$q4,
                    'question5'=>$q5,
                    'question6'=>$q6,
                    'question7'=>$q7,
                    'question8'=>$q8,
                    'question9'=>$q9,
                    'question10'=>$q10,
                    'question11'=>$q11,
                    'question12'=>$q12,
                    'question13'=>$q13,
                    'question14'=>$q14,
                    'question15'=>$q15,
                    'question16'=>$q16,
                    'question17'=>$q17);
        $this->db->insert('questionnaire', $data);

    }
////////
    public function getSId( $studentId)
    {
        $this->db->select("id");
        $this->db->from('student');
        $this->db->where('id', $studentId);
        $query = $this->db->get();
        return $query->result_array(); 
    }
     /**
     * Select stuent's questionnaire to complete
     * @param string $data store all feild the table questionnaire 
     * @param 
     * @author Bunthean MOV <bunthean.mov2727@gmail.com>
     */
    public function getQuestionnaire($studentId)
    {
        $this->db->select("*");
        $this->db->from('questionnaire');
        $this->db->where('questionnaire.student_id', $studentId);
        $query = $this->db->get();
        // var_dump($query->result_array());die();
        return $query->result_array(); 
    }

	public function getQuestionnaireInfo($stuId)
    { 
     $this->db->select("s.firstname as sFirstname,s.lastname as sLastname,c.name,su.firstname as suFirstname,su.lastname as suLastname");
     $this->db->from('supervisor su');
     $this->db->join('student s', 's.supervisor_id = su.id');
     $this->db->join('company c', 'c.id = su.company_id');
     $this->db->where('s.id', $stuId);
    $query = $this->db->get();
     return $query->result_array(); 
    }
	///////
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