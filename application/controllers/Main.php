<?php
class Main extends CI_Controller{
  function index()
  {
    $this->load->view("loginf" );
  }
  function login(){
    $data['title']='codeigniter';
    $this->load->view("loginf",$data);
  }
  function login_validation(){
     $this->load->library('form_validation');
     $this->form_validation->set_rules('usr','Username','required');
     $this->form_validation->set_rules('pass','Password','required');
     if($this->form_validation->run()){
       $username=$this->input->post('usr');
       $password=$this->input->post('pass');
       $this->load->model('main_model');
       if($this->main_model->can_login($username, $password)){
         $session_data=array(
           'user' => $username
         );
         $this->session->set_userdata($session_data);
         redirect (base_url().'main/enter');
       }
       else {
         $this->session->set_flashdata('error', 'Invalid username and password');
         redirect (base_url().'main/login');
       }
     }
     else {
       $this->login();

     }
  }
  function enter(){
    if($this->session->userdata('user') != ''){
      echo '<h2>Welcome - '.$this->session->userdata('user').'</h2>';
      echo  '<label><a href="'.base_url().'main/logout">Log out</label></a>';
    }
    else {
      redirect (base_url(). 'main/login');
    }
  }
  function logout(){
    $this->session->unset_userdata('user');
    redirect (base_url() . 'main/sign_up');
  }
  function sign_up(){
    $this->load->view('signup');
  }
}
?>
