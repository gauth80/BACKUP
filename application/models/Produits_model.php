<?php

/**
 * 	Pour ne pas trop s'y perdre, se qui est en Maj fais partie de la bdd
 */
class Produits_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function get_produits() {
		$this->db->order_by('produits.PRO_ID', 'DESC')
			     ->join('categorie', 'categorie.CAT_ID = produits.CAT_ID')
			     //aff produits sinon diff de 0
				 ->having('PRO_STOCK_PHYSIQUE != 0');
						  
		$query = $this->db->get('produits');
		return $query->result();
	}
	
	/*data => input*/
	public function insert_produits() {
		//peut etre rajouter 'data' => $this->input->post('pro_lib') selon la view
		$data = array(
			'PRO_LIBELLE' => 'pro_lib',
			'PRO_REF' => 'pro_ref',
			'PRO_DESCRIPTION' => 'pro_desc',
			'PRO_PRIX_ACHAT' => 'pro_prix',
			'PRO_PHOTO' => 'pro_img',
			'PRO_STOCK_PHYSIQUE' => 'pro_stock',
			'CAT_LIBELLE' => 'cat_lib'
		);
		//même chose qu'insert, sauf requete moins longue
		$query = $this->db->set($data)->get_compiled_insert('produits');
	}

	public function update_produits() {
		$data = $this->insert_produits();
		$this->db->set($data)
			 	 ->insert('produits');


	}



	
}