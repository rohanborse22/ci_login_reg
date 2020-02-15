<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function login_page()
	{

	     	$data['title']='Login form';
		    $this->load->view('fixed/header',$data);
        $this->load->view('main/login',$data);
        $this->load->view('fixed/footer');

	}

	function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run())
        {
           $username=$this->input->post('username');
           $password=$this->input->post('password');
           $this->load->model('main_model');
           if($this->main_model->can_login($username,$password)){
           	$session_data=array(
                'username' => $username
           		);
           	  $this->session->set_userdata($session_data);
           	  redirect(base_url().'login/home');
           }
           else{
           	$this->session->set_flashdata('error','invalid username or password');
            redirect(base_url().'login/login_page');
           }
        }
        else
        {
        	$this->login_page();
        	
        }
	}

	public function home()
	{
		if($this->session->userdata('username')!='')
		{


               	$data['title']='Login form';
               	$data['username']=$this->session->userdata('username');
		            $this->load->view('fixed/header',$data);
                $this->load->view('main/home',$data);
                $this->load->view('fixed/footer');

		}
		else
		{
			redirect(base_url().'login/login_page'); 

		}
	}

      public function logout()
      {
    	$this->session->unset_userdata('username');
			redirect('login/login_page'); 
    } 

       public function signup()
       {
      	$this->load->library('form_validation');
	    	$this->form_validation->set_rules('data[0][name]','name','required');
        $this->form_validation->set_rules('data[0][username]','username','trim|required|is_unique[users.username]');
        $this->form_validation->set_rules('data[0][password]','password','required');
        if($this->form_validation->run())
        {
         $this->load->model('master_model');
          foreach($_POST['data'] as $user)
            { 
                   $id = $this->master_model->insertRecord('users',$user);
                   redirect(base_url().'login/login_page');
            }

        }
          	    $data['title']='Login form';
               	$data['username']=$this->session->userdata('username');
    		        $this->load->view('fixed/header',$data);
                $this->load->view('main/signup',$data);
                $this->load->view('fixed/footer');


       } 

       function rolekey_exists($key) {
        $this->load->model('main_model');
        $this->main_model->mail_exists($key);    
       }
        
 
}
