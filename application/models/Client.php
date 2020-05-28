<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Client extends CI_Model
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
    //--------------------------------------------------------detail----------------------
    /**
     * \brief affichage du detail
     * \param id id du fournisseur
     * \return table variable(info du fourni)
     * \autor Augustin LEGRIS
     * \date 26/05/2020
     */
    public function clientTab($id)
    {
        $detail = $this->db->where("CLI_ID", $id)->get('clients'); // requêtes

        return $detail->row();
    }
    //---------------------------------------------------------ajout----------------------
    /**
     * \brief ajout d'un fournisseur
     * \param add fournisseur a ajouté
     * \return table de variables
     * \autor Augustin LEGRIS
     * \date 26/05/2020
     */
    public function clientAjout($add)
    {
        $this->db->insert('clients', $add);
    }
    //---------------------------------------------------------maj---------------------
    /**
     * \brief maj d'un fournisseur
     * \param id id du fournisseur
     * \param maj variable à ajouter
     * \return table de variables
     * \autor Augustin LEGRIS
     * \date 26/05/2020
     */
    public function ClientModif($id, $maj)
    {
        $this->db->update('clients', $maj, 'CLI_ID=' . $id);
    }
    //-----------------------------------------------------------suppression------------
    /**
     * \brief supression d'un fournisseur
     * \param id id du fournisseur a supprimé
     * \autor Augustin LEGRIS
     * \date 26/05/2020
     */
    public function delClient($id)
    {
        $this->db->delete('clients', 'FOU_ID=' . $id);
    }
}