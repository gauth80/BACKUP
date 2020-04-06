<?php
class Produits extends CI_Model
{

    // ------------------------- Partie index -------------------------
    public function afficher()
    {

        // Exécute la requête 
        $afficher = $this->db->query("SELECT * FROM ci_produits ORDER BY pro_id ASC");
        // Ajoute les résultats de la requête au tableau des variables à transmettre à la vue      
        return $afficher->result();
    }
    // ------------------------- Partie detail -------------------------
    public function detail($id)
    {

        //le WHERE c'est comme en sql et le get c'est le FROM
        $detail = $this->db->where("pro_id", $id)->get('ci_produits');
        return $detail->row();
    }
    // ------------------------- Partie ajouter -------------------------
    public function ajout_produits($ajout)
    {

        $this->db->insert('ci_produits', $ajout);
        $id = $this->db->insert_id();

        return $id;
    }
    // ------------------------- Partie ajout d'image -------------------------
    public function img($id, $type)
    {

        $this->db->update('ci_produits', $type, "pro_id=" . $id);
    }
    // ------------------------- Partie modifier -------------------------
    public function modif_produits($id, $modif)
    {

        $this->db->update('ci_produits', $modif, "pro_id=" . $id);
    }
    // ------------------------- Partie supprimer -------------------------
    public function suppr_produits($id)
    {

        $this->db->delete('ci_produits', 'pro_id=' . $id);
    }
}
