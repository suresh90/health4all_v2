<?php 
class Reports_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function get_op_summary(){
		$from_date=date("Y-m-d",strtotime($this->input->post('from_date')));
		$to_date=date("Y-m-d",strtotime($this->input->post('to_date')));

		$this->db->select("          department 'department',
          SUM(CASE WHEN 1  THEN 1 ELSE 0 END) 'op',
		SUM(CASE WHEN gender = 'F'  THEN 1 ELSE 0 END) 'op_female',
		SUM(CASE WHEN gender = 'M'  THEN 1 ELSE 0 END) 'op_male',	
		SUM(CASE WHEN age_years <= 14 THEN 1 ELSE 0 END) 'op_child',
		  SUM(CASE WHEN gender = 'F' AND age_years <= 14 THEN 1 ELSE 0 END) 'op_fchild',
		  SUM(CASE WHEN gender = 'M' AND age_years <= 14 THEN 1 ELSE 0 END) 'op_mchild',
		  SUM(CASE WHEN age_years > 14 AND age_years <= 30 THEN 1 ELSE 0 END) 'op_14to30',
		  SUM(CASE WHEN gender = 'F' AND age_years > 14 AND age_years <= 30 THEN 1 ELSE 0 END) 'op_f14to30',
		  SUM(CASE WHEN gender = 'M' AND age_years > 14 AND age_years <= 30 THEN 1 ELSE 0 END) 'op_m14to30', 
		  SUM(CASE WHEN age_years > 30 AND age_years <= 50 THEN 1 ELSE 0 END) 'op_30to50',
		SUM(CASE WHEN gender = 'F' AND age_years > 30 AND age_years <= 50 THEN 1 ELSE 0 END) 'op_f30to50',
		  SUM(CASE WHEN gender = 'M' AND age_years > 30 AND age_years <= 50 THEN 1 ELSE 0 END) 'op_m30to50', 
		SUM(CASE WHEN age_years > 50 THEN 1 ELSE 0 END) 'op_50plus',
		SUM(CASE WHEN gender = 'F' AND age_years > 50 THEN 1 ELSE 0 END) 'op_f50plus',
		  SUM(CASE WHEN gender = 'M' AND age_years > 50 THEN 1 ELSE 0 END) 'op_m50plus'");
		 $this->db->from('patient_visits')->join('patients','patient_visits.patient_id=patients.patient_id')
		 ->join('departments','patient_visits.department_id=departments.department_id')
		 ->where('visit_type','OP')
		 ->where("(admit_date BETWEEN '$from_date' AND '$to_date')")
		 ->group_by('department');
		  
		$resource=$this->db->get();
		return $resource->result();
	}
	function get_op_detail(){
		$from_date=date("Y-m-d",strtotime($this->input->post('from_date')));
		$to_date=date("Y-m-d",strtotime($this->input->post('to_date')));

		$this->db->select("visit_id,CONCAT(IF(first_name=NULL,'',first_name),' ',IF(last_name=NULL,'',last_name)) name,gender,IF(gender='F' AND father_name=NULL,spouse_name,father_name) parent_spouse,age_years,place,phone,department",false);
		 $this->db->from('patient_visits')->join('patients','patient_visits.patient_id=patients.patient_id')
		 ->join('departments','patient_visits.department_id=departments.department_id')
		 ->where('visit_type','OP')
		 ->where("(admit_date BETWEEN '$from_date' AND '$to_date')");		  
		$resource=$this->db->get();
		return $resource->result();
	}
}
?>
