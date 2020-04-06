<?php
class Comptes extends CI_Model
{
    // ------------------------- Partie ajouter -------------------------
    public function crea_inscri($ajout)
    {

        $this->db->insert('ci_comptes', $ajout);
        $id = $this->db->insert_id();

        return $id;
    }
}
