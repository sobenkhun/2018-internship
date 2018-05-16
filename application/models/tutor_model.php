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
        return $query->result_array();
    }

   public function selectTutor()
    {
    	
    	$this->db->select('*');
    	$query = $this->db->get('tutor');
    	return $query->result_array();
    }

    public function viewSupervisor($sId)
    {
        $this->db->select('*');
        $this->db->from('supervisor');
        $this->db->join('company', 'company.id = supervisor.id');
        $this->db->where('supervisor.id', $sId);
        $query = $this->db->get();
        return $query->result_array();
    }

    

}