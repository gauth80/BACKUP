<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Categorie extends CI_Model
{

    /**
     * \brief Selection de toute la table par classement d'ID 
     * \return Selection complète de la table
     * \autor Grillet Stéphane
     * \date 05/05/2020
     */
    public function select_cat()
    {

        $select_cat = $this->db->query("SELECT * FROM categorie ORDER BY cat_id ASC");
        return $select_cat->result();
    }
    /**
     * \brief Selection du detail
     * \param id = id de la categorie
     * \return Selection d'une certaine catégorie par appel de son ID dans le formulaire
     * \autor Grillet Stéphane
     * \date 05/05/2020
     */
    public function detail($id)
    {

        $detail = $this->db->where("CAT_ID", $id)->get('categorie');
        return $detail->row();
    }
    /**
     * \brief Ajout dans la table, par l'insert, du formulaire
     * \return Création dans la table par un formulaire d'une nouvelle catégorie
     * \autor Grillet Stéphane
     * \date 06/05/2020
     */
    public function catAjouts($ajout)
    {

        $this->db->insert('categorie', $ajout);
    }
    /**
     * \brief Modification de la table, par l'update, du formulaire
     * \return Update de la table par un formulaire
     * \autor Grillet Stéphane
     * \date 06/05/2020
     */
    public function catModif($id, $modif)
    {

        $this->db->update('categorie', $modif, "CAT_ID=" . $id);
    }
    /**
     * \brief Suppression dans la table, par le delete, d'une catégorie
     * \param id = id de la catégorie
     * \return Delete d'une catégorie contenu dans la table
     * \autor Grillet Stéphane
     * \date 11/05/2020
     */
    public function catSuppr($id)
    {

        $this->db->delete('categorie', 'CAT_ID=' . $id);
    }
}