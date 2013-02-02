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

	public function registration() {
		$this->load->helper('form');
		$this->load->model('m_member');
		$dataLayout['titre'] = 'URL picker';
		$dataLayout['vue'] = $this->load->view('signin',array(),true);
		$this->load->view('layout', $dataLayout);
	}

	public function signin(){
		$this->load->helper('form');
		$this->load->model('m_member');
		$this->load->helper('email');
		$data['pseudo'] = $_POST['pseudo'];
		$data['email'] = $_POST['email'];
		$data['mdp'] = $_POST['mdp'];
		$dataFiche['membres'] = $this->m_member->inscrire($data);
		$name = $this->m_member->recupererPseudoId($data['email']);
		$data = array('email'=> $this->input->post('email'), 'logged' => true , 'name' => $name[0]->pseudo);
		$this->session->set_userdata($data);
		$dataFiche['membres'] = $this->m_member->afficher($data);
		$dataLayout['titre'] = 'URL picker';
		$dataLayout['vue'] = $this->load->view('validSignIn',$dataFiche, TRUE);
		$this->load->view('layout',$dataLayout); 
	}	
	
	public function login()	{
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
	
	public function deconnexion(){
		$this->session->sess_destroy();
		redirect(site_url());
	}
	
	

}

