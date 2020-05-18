<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personnels extends CI_Model
{
	protected $table = 'personnels';

	/**
	 *	Ajoute une news
	 */
	public function ajouter($data)
	{
		$this->db->insert($this->table,$data);
	}

	public function personnelID($id)
    {
        $detail=$this->db->where("PER_ID",$id)->get('personnels'); // requêtes
        return $detail->row();
    }

	/**
	 *	Éditer
	 */
	public function modification($id,$maj)
	{
		$this->db->update($this->table, $maj ,'PER_ID='.$id);
	}

	/**
	 *	Supprime
	 */
	public function supprimer($id)
	{
		return $this->db->where('PER_ID', (int) $id)
			->delete($this->table);
	}

	/**
	 *	Retourne une liste du personnel
	 */
	public function liste()
	{
		$this->load->database();
		return $this->db->select('*')
			->from($this->table)
			->order_by('PER_ID', 'desc')
			->get()
			->result();
	}

}

?>