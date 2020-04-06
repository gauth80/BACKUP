<?php
class Categories extends CI_Model
{

    // ------------------------- Partie catégorie -------------------------
    public function select_cat()
    {

        // Exécute la requête 
        $select_cat = $this->db->query("SELECT * FROM ci_categories ORDER BY cat_nom");
        return $select_cat->result();
    }
}