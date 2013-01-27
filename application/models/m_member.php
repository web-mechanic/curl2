<?php

class M_Member extends CI_Model
{

	public function verify($data)
	{
		$query = $this->db->get_where('membres', array('email' => $data['email'], 'mdp' => $data['mdp']));
		return $query->result_array();
	}

}