<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if( $this->session->userdata('logged_in') && $this->uri->segment(2) != "deconnexion"){
			redirect('urlfinder/');
		}
	}
	  
	public function index()
	{
		$this->load->helper('form');
		
		$data['titre'] = 'Connexion';
		$data['vue'] = $this->load->view('membreconnex', $data, TRUE);
		
		$this->load->view('layout', $data);
			
	}

	
	
	public function login()
	{
		$this->load->model('m_member');
		
		$data['mdp'] = $this->input->post('mdp');
		$data['email'] = $this->input->post('email');

		
		$donnees = $this->m_member->verify($data);
		
		
		if( $donnees )
		{	
			$this->session->set_userdata('logged_in', true);
			$this->session->set_userdata('email', $this->input->post('email'));

			redirect('urlfinder/lister');
		}
		else
		{
			redirect('error/mauvais_identifiant');
		}
		
	}
	
	public function deconnexion()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}
	
	

}

