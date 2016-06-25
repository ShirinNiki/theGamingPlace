<?php
class Users extends CI_Controller{
	
	
	
	public function register(){
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|matches[password]');
		if ($this->form_validation->run() == FALSE){
			//Load View
			$data['main_content'] = 'register';
			$this->load->view('layouts/main', $data);
		}
		else
		{
			if($this->User_model->register()){
				$this->session->set_flashdata('registered','you are now register');
				redirect('products');
			}
		}
	}
	
	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]|max_length[20]');
		
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$user_id = $this->User_model->login($username, $password);
		
		//validate user
		if($user_id){
			//Create array of user data
			$data = array(
				'user_id' => $user_id,
				'username' => $username,
				'logged_in' => true
			);
			//Set session userdata
			$this->session->set_userdata($data);
			
			//Set message
			$this->session->set_flashdata('pass_login','you are logged in');
			redirect('products');
			} else{
				//Set message
				$this->session->set_flashdata('fail_login','Sorry, the login info is not correct');
				redirect('products');
			}
		}
	
	
	public function logout(){
		//Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');
		
		redirect('products');
	}
}
?>