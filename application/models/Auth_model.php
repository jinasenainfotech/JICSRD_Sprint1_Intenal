<?php

Class Auth_model extends CI_Model {

	public function forget_password($user,$code){
		
		$query = $this->db->get_where('user', array('user_name' => $user,'forget_password_code' => $code));
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

	public function user_check($user){
		$query = $this->db->get_where('user', array('user_name' => $user));
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


	public function password_reset($id,$password,$recovery_key){
		$data = array(
			'password' => $password,
			'forget_password_code' => $recovery_key,
		);
		$this->db->where('user_id', $id);
		return $this->db->update('user', $data);
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

	public function get_permision($id){
		$query = $this->db->get_where('user_permission', array('permission_set_id' => $id));
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

	public function user_password_reset($id,$password,$recovery_key){
		$data = array(
			'password' => $password,
			'forget_password_code' => $recovery_key,
			'first_loging' => '0',
		);
		$this->db->where('user_id', $id);
		return $this->db->update('user', $data);
	}

}

?>