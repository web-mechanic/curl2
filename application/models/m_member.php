<?php

class m_member extends CI_Model
{

	public function verify($data)
	{
		$query = $this->db->get_where('membres', array('email' => $data['email'], 'mdp' => $data['mdp']));
		return $query->result_array();
	}

	public function subscribe($data){

        $dataInsc = array('email' => $data['email'], 'mdp' => $data['mdp']);
        $this->db->insert('membres', $dataInsc);
    }

}