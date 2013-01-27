<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class urlfinder extends CI_Controller {

	public function index()
	{
		$this->load->helper('form');

		$dataLayout['vue'] = $this->load->view('urlpicker', null, true);

		$this->load->view('layout', $dataLayout);
	}
	
	public function lister()
	{

		$this->load->helper('form');

		$this->load->model('M_urlfinder');
		
		$dataList['liens'] = $this->M_urlfinder->lister();
		
		$dataLayout['vue'] = $this->load->view('lister', $dataList, TRUE);
		
		$this->load->view('layout', $dataLayout);
	
	}
	
	public function analyser ()
	{



		$ch = curl_init();

		curl_setopt($ch, CURLOPT_HEADER, 0);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt($ch, CURLOPT_URL, $this->input->post('url'));

		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

		$html = curl_exec($ch);

		if(!$html){

			redirect(base_url());

		}else{
		
		
		
		curl_close($ch);

		$html = utf8_decode($html);

		$dom = new DOMDocument();

		@$dom->loadHTML($html);

		$nodes = $dom->getElementsByTagName("title");

		$dataLayout['title'] = $nodes->item(0)->nodeValue;
		
		$nodes = $dom->getElementsByTagName("img");

		foreach($nodes as $node){
			$src = $node->getAttribute("src");

			if (strpos($src, 'http://') === false and strpos($src, 'https://') === false) {
				$url = $this->input->post('url');

				if (strpos($url, 'http://') === false and strpos($url, 'https://') === false)
					$url = 'http://'.$url;

				$dataLayout['srcImg'][] = $url.$src;
			} else {
				$dataLayout['srcImg'][] = $src;
			}

		}
		$dataLayout['lien'] = $this->input->post('url');

		$nodes = $dom->getElementsByTagName("meta");

		foreach($nodes as $node){

			if(strtolower($node->getAttribute("name")) == "description"){

				$dataLayout['description'] = $node->getAttribute("content");
				
			}
		}

		if (!isset($dataLayout['description'])) $dataLayout['description'] = 'No description found';

		$this->load->helper('form');

		$dataLayout['vue'] = $this->load->view('listing', $dataLayout, true);

		$this->load->view('layout', $dataLayout);
	}
}
	
	public function ajouter ()
	{
		$this->load->model('m_urlfinder');
		
		$data['titre'] = $this->input->post('titre');

		$data['lien'] = $this->input->post('lien');

		$data['description'] = $this->input->post('description');

		$data['img'] = $this->input->post('img');
		
		$this->m_urlfinder->inserdb($data);
				
		$this->lister();		
		
	}
	
	public function supprimer()
	{
		$this->load->model('m_urlfinder');
		
		$this->m_urlfinder->supprimer($this->uri->segment(3));

		$this->lister();
	}

public function preview()
	{
		$this->load->model('m_urlfinder');
		
		$this->load->helper('form');
		
		$monPost = $this->m_urlfinder->voir($this->uri->segment(3));

		$data['titre'] = $monPost->title;
		
		$data['lien'] = $monPost->url;
		
		$data['description'] = $monPost->desc;
		
		$data['img'] = $monPost->src;
		
		$data['id'] = $monPost->id;
		
		
		$dataLayout['vue'] = $this->load->view('modifier', $data, true);
		
		$this->load->view('layout', $dataLayout);

	}
	
	public function modif()
	{
		$this->load->model('m_urlfinder');

		$data['titre'] = $this->input->post('titre');
		$data['lien'] = $this->input->post('lien');
		$data['description'] = $this->input->post('description');
		$data['img'] = $this->input->post('img');
		$this->m_urlfinder->modifier($this->input->post('id'), $data);
		
		$this->load->helper('form');
		$this->lister();
		
		
	}



}
