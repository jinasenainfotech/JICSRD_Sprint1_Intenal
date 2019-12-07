<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		// $this->load->database(); -- ok
		// $this->load->helper('form'); -- ok
		// $this->load->helper('url');
		// $this->load->library('form_validation'); -- ok
		$this->load->helper('string');
		$this->load->library('jics');

		$Auth_model = $this->load->model('Auth_model');
	}

	public function index()
	{
		if(isset($_SESSION['user'])){
			redirect(base_url('main'),'refresh');
		}
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->data['first_loging'] = false;

		if($this->form_validation->run() == True){

			$user_name = $this->input->post('username');
			$password = $this->input->post('password');
			if ($this->Auth_model->forget_password($user_name,$password) != false) {
				$user_data = $this->Auth_model->forget_password($user_name,$password);
				$this->data['first_name'] = $user_data[0]->firstname;
				$this->data['last_name'] = $user_data[0]->lastname;
				$this->data['hid'] = $user_data[0]->user_id;
				$this->load->view('loging', $this->data);
			}elseif($user_infor = $this->user_check($user_name,$password) and $user_infor != FALSE){
				if($user_infor[0]->first_loging == '1'){



					$this->data['hid'] = $user_infor[0]->user_id;
					$this->data['first_loging'] = true;
					$this->load->view('loging', $this->data);
				}else{

					$this->do_loging($user_infor);
				}
			}else{
				$this->data['error'] = 'Please check your password and user name or contact System Admin.';
				$this->load->view('loging',$this->data);
			}
		}else{
			$this->load->view('loging', $this->data['error'] = validation_errors());
		}
	}


	public function valid_password($password = '')
    {
        $password = trim($password);
        $regex_lowercase = '/[a-z]/';
        $regex_uppercase = '/[A-Z]/';
        $regex_number = '/[0-9]/';
        $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
        if (empty($password))
        {
            $this->form_validation->set_message('valid_password', 'The {field} field is required.');
            return FALSE;
        }
        if (preg_match_all($regex_lowercase, $password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
            return FALSE;
        }
        if (preg_match_all($regex_uppercase, $password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
            return FALSE;
        }
        if (preg_match_all($regex_number, $password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
            return FALSE;
        }
        if (preg_match_all($regex_special, $password) < 1)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
            return FALSE;
        }
        if (strlen($password) < 5)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least 5 characters in length.');
            return FALSE;
        }
        if (strlen($password) > 32)
        {
            $this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
            return FALSE;
        }
        return TRUE;
	}
	
	/**
 * Validate Password
 *
 * @param string $password
 * @return void
 */
public function password($password = '')
{
	$password = trim($password);
	$regex_lowercase = '/[a-z]/';
	$regex_uppercase = '/[A-Z]/';
	$regex_number = '/[0-9]/';
	$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
	if (empty($password))
	{
		$this->form_validation->set_message('password', 'The {field} field is required.');
		return FALSE;
	}
	if (preg_match_all($regex_lowercase, $password) < 1)
	{
		$this->form_validation->set_message('password', 'The {field} field must be at least one lowercase letter.');
		return FALSE;
	}
	if (preg_match_all($regex_uppercase, $password) < 1)
	{
		$this->form_validation->set_message('password', 'The {field} field must be at least one uppercase letter.');
		return FALSE;
	}
	if (preg_match_all($regex_number, $password) < 1)
	{
		$this->form_validation->set_message('password', 'The {field} field must have at least one number.');
		return FALSE;
	}
	if (preg_match_all($regex_special, $password) < 1)
	{
		$this->form_validation->set_message('password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
		return FALSE;
	}
	if (strlen($password) < 5)
	{
		$this->form_validation->set_message('password', 'The {field} field must be at least 5 characters in length.');
		return FALSE;
	}
	if (strlen($password) > 32)
	{
		$this->form_validation->set_message('password', 'The {field} field cannot exceed 32 characters in length.');
		return FALSE;
	}
	return TRUE;
}

	public function first_loging(){
		$this->form_validation->set_rules('password_1', 'Password', 'trim|required|min_length[6]|max_length[16]|callback_password');
		$this->form_validation->set_rules('password_2', 'Password', 'trim|required|min_length[6]|max_length[16]');

		if($this->input->post('password_1')!=$this->input->post('password_2')){
			$this->data['status'] = false;
			$this->data['hid'] = $this->input->post('hid');
			$this->data['error'] = 'Password and Confirm password is different';
			return $this->load->view('loging',$this->data);

		}
		if($this->form_validation->run() == TRUE){
			$id = $this->input->post('hid');
			$userData = $this->Auth_model->get_user_by_id($id);
		
			$recovery_key = random_string('md5' , 16);
			$psw = password_hash($this->input->post('password_1'), PASSWORD_DEFAULT);
			$this->data =[];
			if($this->Auth_model->user_password_reset($id,$psw,$recovery_key)){
				
				$this->data['forget_key'] = $recovery_key;
				$this->data['permission'] = $userData[0]->permission_id;
			}
			$this->load->view('loging',$this->data);
		}else{
		
			$this->data['status'] = false;
			$this->data['hid'] = $this->input->post('hid');
			$this->data['error'] = validation_errors();
			
			$this->load->view('loging',$this->data);
		}
		

	}


	public function user_check($user_name,$password){
		$temp = $this->Auth_model->user_check($user_name);
		if(isset($temp) and $temp != '' and $temp != null and password_verify($password, $temp[0]->password) == TRUE ){
			return $temp;
		}else{
			return false;
		}
	}

	public function do_loging($data){

		$permission = $this->Auth_model->get_permision($data[0]->permission_id);

		$data = array(
			'user_id' => $data[0]->user_id,
			'user_name' => $data[0]->user_name,
			'first_name' => $data[0]->firstname,
			'last_name' => $data[0]->lastname,
			'designation' => $data[0]->designation,
			'permission' => $permission[0],
		);

		$this->session->set_userdata('user',$data);
		$this->session->set_userdata('permission',$permission[0]);
		redirect(base_url(),'refresh');
	}

	public function do_logout(){

		$this->session->sess_destroy();
		redirect(base_url(),'refresh');
	}

	public function password_recovery(){
		$this->form_validation->set_rules('password_1', 'Password', 'trim|required|min_length[6]|max_length[8]');
		$this->form_validation->set_rules('password_2', 'Password', 'trim|required|min_length[6]|max_length[8]');

		$re = $this->Auth_model->get_user_by_id($this->input->post('hid'));
		if($this->form_validation->run() == TRUE){
			if($this->input->post('password_1') == $this->input->post('password_2')){

				$recovery_key = random_string('md5' , 16);
				$psw = password_hash($this->input->post('password_1'), PASSWORD_DEFAULT);


				if($this->Auth_model->password_reset($this->input->post('hid'),$psw,$recovery_key) == TRUE){
					$this->data['massage'] = 'Password Reset Successfully';
					$this->data['forget_key'] = $recovery_key;
					$this->load->view('loging',$this->data);

				}else{
					$this->data['error'] = 'Operation failed. Please try again in few minutes';
					$this->load->view('loging',$this->data);
				}
			}else{

				$this->data['first_name'] = $re[0]->firstname;
				$this->data['last_name'] = $re[0]->lastname;
				$this->data['hid'] = $re[0]->user_id;
				$this->data['error'] = 'Passwords are miss match';
				$this->load->view('loging', $this->data);
			}
		}else{

			$this->data['first_name'] = $re[0]->firstname;
			$this->data['last_name'] = $re[0]->lastname;
			$this->data['hid'] = $re[0]->user_id;
			$this->data['error'] = validation_errors();
			$this->load->view('loging', $this->data);

		}

	}


}
