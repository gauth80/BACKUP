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
    /**
     * \brief Selection du detail
     * \param id = id de la categorie
     * \return Selection d'un certain client par appel de son ID dans le formulaire
     * \autor Grillet Stéphane
     * \date 28/05/2020
     */
    public function detail($id)
    {
        $detail = $this->db->where("CLI_ID", $id)->get('clients');
        return $detail->row();
    }
    /**
     * \brief Ajout dans la table, par l'insert, du formulaire
     * \return Création dans la table par un formulaire d'un nouveau client
     * \autor Grillet Stéphane
     * \date 28/05/2020
     */
    public function cliAjouts($ajouts)
    {
        $this->db->insert('clients', $ajouts);
    }
    /**
     * \brief Modification de la table, par l'update, du formulaire
     * \return Update de la table par un formulaire
     * \autor Grillet Stéphane
     * \date 28/05/2020
     */
    public function cliModif($id, $update)
    {
        $this->db->update('clients', $update, 'CLI_ID=' . $id);
    }
    /**
     * \brief Suppression dans la table, par le delete, d'une catégorie
     * \param id = id du client
     * \return Delete d'une catégorie contenu dans la table
     * \autor Grillet Stéphane
     * \date 28/05/2020
     */
    public function cliSuppr($id)
    {

        $this->db->delete('clients', 'CLI_ID=' . $id);
    }
}