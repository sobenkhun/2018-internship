<?php
/**
 * This model contains the business logic and manages the persistence of users and roles
 * @copyright  Copyright (c) 2018 Benjamin BALET
 * @license    http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link       https://github.com/bbalet/skeleton
 * @since      1.0.0
 */

if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

/**
 * This model contains the business logic and manages the persistence of users and roles
 * It is also used by the session controller for the authentication.
 */
class tutor_model extends CI_Model {

    /**
     * Default constructor
     */
    public function __construct() {


    }

   public function selectCompany()
    {
    	
    	$this->db->select('*');
    	$query = $this->db->get('company');
    	return $query->result_array();
    }
    public function getCompanyDetail($companyId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('company', array('id' => $companyId));
        //var_dump($query);die();
        return $query->result_array();
    }

   public function selectTutor()
    {
    	
    	$this->db->select('*');
    	$query = $this->db->get('tutor');
    	return $query->result_array();
    }


    public function getCompanyDataDetail2($companyId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('company', array('id' => $companyId));
        return $query->result_array();
    }
    public function getTutorDataDetail($tutorId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('tutor', array('id' => $tutorId));
        return $query->result_array();
    }

    /* superviser detail */
    public function getSupDataDetail($supId)
    {
        $this->db->select('*');
        $query = $this->db->get_where('supervisor', array('id' => $supId));
        // var_dump($query->result_array());die();
        return $query->result_array();
    }
    /* join table compnay with subperviser*/

    public function viewSupervisor()
    {
        $this->db->select('supervisor.id as sId, name, supervisor.firstname AS sFname, Supervisor.lastname AS sLname');
        $this->db->from('supervisor');
        $this->db->join('company', 'company.id = supervisor.company_id');
        //$this->db->where('supervisor.id');
        $query = $this->db->get();
        return $query->result_array();
    }

}
