<?php

class m_member extends CI_Model
{

	public function verify($data)
	{
		$query = $this->db->get_where('membres', array('email' => $data['email'], 'mdp' => $data['mdp']));
		return $query->result_array();
	}

	public function inscrire($data){
		$value = array(
		'email' => $data['email'],
		'pseudo' => $data['pseudo'],
		'mdp' => $data['mdp']
		);

		$this->db->insert('membres',$value);
	}

	public function recupererPseudoId($email) {
		$this->db->select('pseudo,user_id');
		$this->db->from('membres');
		$this->db->where('email',$email);
		$query = $this->db->get();
		return $query->result();
	}

	public function afficher($data){
		$this->db->select('*');
		$this->db->from('membres');
		$query = $this->db->get();
		return $query->result();
	}

	public function subscribe($data){

        $dataInsc = array('email' => $data['email'], 'mdp' => $data['mdp']);
        $this->db->insert('membres', $dataInsc);
    }

}