<?php

Class ApiDataModel extends CI_Model 
{

    /**
     * Check Exist Record By Id
     *
     * @param int $reportId
     * @return void
     */
    public function checkExist($reportId)
    {
       
		$this->db->select('*');
		$this->db->where('report_id', $reportId);
		$this->db->from('api_data');
		$query = $this->db->get();
		return $query->num_rows();
    }
    
    /**
     * Store Api Data for Reports
     *
     * @param array $data
     * @return void
     */
    public function store($data)
    {
        $this->db->insert('api_data', $data);
        $response['id'] = $this->db->insert_id();

        return $response;
    }
    

	

}