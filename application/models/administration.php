<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Administration extends CI_Model
{
    /**
     * \brief Affichage toute la table
     * \return permet d'aller chercher toutes les données de la table
     * \autor Grillet Stéphane
     * \date 27/05/2020
     */
    public function select_cli()
    {
        $select_cli = $this->db->query("SELECT * FROM clients ORDER BY CLI_ID ASC");
        return $select_cli->result();
    }




    
    /**
     * \brief Selection de toute la vue infos_contact_client
     * \return Selection complète de la table
     * \autor Grillet Stéphane
     * \date 25/05/2020
     */
    public function session_client()
    {

        $query = $this->db->query("SELECT * FROM infos_contact_client");
        return $query->result();
    }
    /**
     * \brief Selection de toute la table personnels
     * \return Selection complète de la table
     * \autor Grillet Stéphane
     * \date 26/05/2020
     */
    public function session_admin()
    {

        $query = $this->db->query("SELECT * FROM personnels");
        return $query->result();
    }
}
