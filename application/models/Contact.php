<?php
class Contact extends CI_Model
{

    // ------------------------- Partie ajout de nouveau formulaire de contact -------------------------
    public function ajout_contact($ajout)
    {

        $this->db->insert('ci_contact', $ajout);
    }
}