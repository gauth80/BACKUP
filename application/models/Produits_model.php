
<?php

class Produits_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function get_produits_for_client() {
		$this->db->order_by('produits.PRO_ID', 'DESC')
			     ->join('categorie', 'categorie.CAT_ID = produits.CAT_ID')
			     //aff produits si diff de 0
				 ->having('PRO_STOCK_PHYSIQUE != 0');
		$query = $this->db->get('produits');
		return $query->result();
	}

	public function get_produits_for_personnal() {
		$this->db->order_by('produits.PRO_ID', 'DESC');				  
		$query = $this->db->get('produits');
		return $query->result();
	}
	
	public function insert_produits($pro_img, $slug) {
		$data = array(
			'PRO_LIBELLE' => $this->input->post('pro_lib'),
			'PRO_REF' => $this->input->post('pro_ref'),
			'PRO_DESCRIPTION' => $this->input->post('pro_desc'),
			'PRO_PRIX_ACHAT' => $this->input->post('pro_prix'),
			'PRO_STOCK_PHYSIQUE' => $this->input->post('pro_stock'),
			'CAT_ID' => $this->input->post('cat_exist'),
			'PRO_SLUG' => $slug,
			'PRO_PHOTO' => $pro_img

		);

		return $this->db->set($data)->insert('produits');
	}

	public function update_produits($pro_img, $slug) {

        $data = array(
			'PRO_LIBELLE' => $this->input->post('pro_lib'),
			'PRO_REF' => $this->input->post('pro_ref'),
			'PRO_DESCRIPTION' => $this->input->post('pro_desc'),
			'PRO_PRIX_ACHAT' => $this->input->post('pro_prix'),
			'PRO_STOCK_PHYSIQUE' => $this->input->post('pro_stock'),
			'CAT_ID' => $this->input->post('cat_exist'),
			'PRO_SLUG' => $slug,
			'PRO_PHOTO' => $pro_img
            );

            $this->db->where('PRO_ID', $this->input->post('pro_exist'));
            return $this->db->update('produits', $data);
	}

	public function delete_produits($id) {
        $this->db->where('PRO_ID', $this->input->post('pro_exist'));
        $this->db->delete('produits');
        return true;
	}

	public function get_categories_data() {
		
		$this->db->select('*')
				 ->order_by('CAT_ID', 'ASC');
		$query = $this->db->get('categorie');
		return $query->result();
	}

	public function get_produits($slug) {

	$detail = $this->db->where("PRO_SLUG",$slug)->get("produits");
	return $detail->row();

	}

}