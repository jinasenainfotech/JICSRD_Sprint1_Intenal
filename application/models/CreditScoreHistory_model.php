<?php

Class CreditScoreHistory_model extends CI_Model 
{

	/**
	 * Store Credit Score History
	 *
	 * @param array $data
	 * @param int $apiDataId
	 * @return void
	 */
	public function store($data, $apiDataId)
	{
		foreach ($data as $item) {
	
			$item['api_data_entry_no'] = $apiDataId;
			$item['date'] = date('Y-m-d',strtotime($item['date']));
			
			$this->db->insert('credit_score_history', $item);
			
		}
		return true;

	}


	

}