<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Personnel extends CI_Model
{

	/**
	 *	Retourne une liste du personnel
	 */
	public function liste()
	{
		$pers = $this->db->get('personnels');
		return $pers->result();
	}

	/**
	 *	Ajoute une news
	 */
	public function ajouter($data)
	{
		$this->db->insert('personnels', $data);
	}

	public function personnelID($id)
	{
		$detail = $this->db->where("PER_ID", $id)->get('personnels'); // requêtes
		return $detail->row();
	}

	/**
	 *	Éditer
	 */
	public function modification($id, $maj)
	{
		$this->db->update('personnels', $maj, 'PER_ID=' . $id);
	}

	/**
	 *	Supprime
	 */
	public function supprimer($id)
	{
		$this->db->delete('personnels', 'PER_ID=' . $id);
	}
}