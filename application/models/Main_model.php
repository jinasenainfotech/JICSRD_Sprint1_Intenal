<?php

Class Main_model extends CI_Model {


	public function recent_reports($name){
		$query = $this->db->get_where('quantitave_input', array('company_name' => $name));
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;
	}


	public function get_repots_list(){

		$this->db->select('*');
		$this->db->where('status', '0');
		$this->db->order_by('id', 'DESC');
		$this->db->from('quantitave_input');
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;
	}

	public function get_repots(){
		$query = $this->db->get('quantitave_input');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;		
	}

	public function approved($id){
		$data = array(
			'status' => '1',
		);
		$this->db->where('id', $id);
		return $this->db->update('quantitave_input', $data);
	}

	public function reject($id){
		$data = array(
			'status' => '2',
		);
		$this->db->where('id', $id);
		return $this->db->update('quantitave_input', $data);
	}

	public function report_save($data){

		foreach ($data as $item) {
			$this->db->insert('quantitave_input', $item['data']);
			$item['cal']['qun_id'] = $this->db->insert_id();
			$this->db->insert('key_ratio_calculations', $item['cal']);
		}
		return true;
	}

	public function creditScoreHistory($data){
		var_dump($data);
		var_dump('<br>');

		foreach ($data as $key => $row) {
			$data[$key]->ref_id = '10';
			$data[$key]->date = date('Y-m-d', strtotime($row->date));;
			// $this->db->insert('cs_history', $row);
		}
		$this->db->insert_batch('cs_history', $data);
		var_dump($data);
		// var_dump($data);
		exit();

	}

	public function get_data_for_report($id){
		$query = $this->db->get_where('quantitave_input', array('id' => $id));
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;
	}

	public function get_data_cal($id){
		$query = $this->db->get_where('key_ratio_calculations', array('qun_id' => $id));
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;	
	}


	public function report_row(){
		$query = $this->db->query("SELECT `abn`,`acn`,`company_name`,`rounding`,`base_currency`,`quality`,`reporting_period_months`,`scope`,`confidentiality_record`,`financial_year`,`month`,`sales`,`cost_of_sales`,`gross_profit`,`other_income`,`depreciation`,`amortisation`,`impairment`,`interest_expense_gross`,`operating_lease_expense`,`finance_lease_hire_purchase_charges`,`non_recurring_gains_losses`,`other_gains_losses`,`other_expenses`,`ebit`,`ebitda`,normalised_ebitda,`profit_before_tax`,`profit_before_tax_after_abnormals`,`tax_benefit_expense`,`profit_after_tax`,`distribution_ordividends`,`other_post_tax_items_gains_losses`,`profit_after_tax_distribution`,`cash`,`trade_debtors`,`total_inventories`,`loans_to_related_parties_1`,`other_current_assets`,`total_current_assets`,`fixed_assets`,`net_intangibles`,`loan_to_related_parties_2`,`other_non_current_assets`,`total_non_curent_assets`,`total_assets`,`trade_creditors`,`interest_bearing_debt_1`,`lone_from_related_parties`,`other_current_liabilities`,`total_current_liabilities`,`total_current_liabilities_2`,`loans_from_related_parites`,`other_non_current_liabilities`,`total_non_current_liabilities`,`total_liabilities`,`share_capital`,`prefence_shares`,`treasury_shares`,`equity_owner_ships`,`total_reserves`,`ratained_earning`,`minorty_interest`,`total_equity`,`balance`,`operating_cash_flow`,`contingent_liabilities`,`other_commitmentes`,`operating_lease_outstanding` FROM quantitave_input ORDER BY id DESC LIMIT 3");
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;	
	}

	public function report_col(){
		$query = $this->db->query("SHOW COLUMNS FROM quantitave_input");
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				if($item->Field != 'id' and $item->Field != 'financial_perfomance' and $item->Field != "created_at" and $item->Field != 'status' and $item->Field != 'user_id' and $item->Field != 'type'){

					$data[] = $item;
				}
			}
			return $data;
		}
		return false;	
	}


	public function resent_two_years(){
		$query = $this->db->query("SELECT * FROM quantitave_input ORDER BY id DESC LIMIT 2");
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;		

	}


	public function get_companies(){
		$query = $this->db->get('company_information');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;		
	}

	public function add_company($data){
		if($this->db->insert('company_information', $data)){
			return true;
		}else{
			return false;
		}		
	}

	public function update_company($id,$data){
		$this->db->where('id', $id);
		return $this->db->update('company_information', $data);
	}

	public function get_companies_tbl(){

		$this->db->order_by('id', 'DESC');
		$this->db->from('company_information');
		$query = $this->db->get();
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;
	}

	public function del_com($id){
		if($this->db->delete('company_information', array('id' => $id))){
			return true;
		}
		return false;
	}

	public function companies_get_by_id($id){
		$query = $this->db->get_where('company_information', array('id' => $id));
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;
	}

	public function add_user($data){

		if($this->db->insert('user', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function update_user($data,$hid){
		$this->db->where('user_id', $hid);
		return $this->db->update('user', $data);
	}

	public function user_name_sug($user_name){
		$query = $this->db->get_where('user', array('user_name' => $user_name));
		if($query->num_rows() > 0)
		{
			return true;
		}
		return false;
	}

	public function get_user_tbl(){
		$query = $this->db->get('user');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;		
	}

	public function get_user_by_id($id){
		$query = $this->db->get_where('user', array('user_id' => $id));
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $key=>$item)
			{
				$data[] = $item;
			}
			return $data;
		}
		return false;
	}

	public function delete_user_by_id($id){
		
	}

	public function password_update($id,$password,$recovery_key){
		$data = array(
			'password' => $password,
			'forget_password_code' => $recovery_key,
		);
		$this->db->where('user_id', $id);
		return $this->db->update('user', $data);
	}

	public function classification($id = null){
		if(!isset($id)){
			$this->db->select('id, name');
			$this->db->from('anzsic_code');
			// $this->db->order_by('id', '');
			$query = $this->db->get();
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			return false;
		}else{
			$this->db->select('id, name');
			$this->db->where('parent_id',$id);
			$this->db->order_by('id', 'DESC');
			$query = $this->db->get('anzsic_code');
			if($query->num_rows() > 0)
			{
				return $query->result() ;
			}
			return false;
		}
	}

}