<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Fournisseur extends CI_model
{
    //----------------------------------------------------------affichage-------------------
      /**
     * \brief affichage toute la table
     * \return table de variables
     * \autor Augustin LEGRIS
     * \date 05/05/2020
     */
    public function fourniList()
    {
        $fourni= $this->db->get('fournisseurs');
        return $fourni->result();
    }
    //--------------------------------------------------------detail----------------------
      /**
     * \brief affichage du detail
     * \param id id du fournisseur
     * \return table variable(info du fourni)
     * \autor Augustin LEGRIS
     * \date 05/05/2020
     */
    public function FourniTab($id)
    {
        $detail=$this->db->where("FOU_ID",$id)->get('fournisseurs'); // requêtes

        return $detail->row();
    }
    //---------------------------------------------------------ajout----------------------
        /**
     * \brief ajout d'un fournisseur
     * \param add fournisseur a ajouté
     * \return table de variables
     * \autor Augustin LEGRIS
     * \date 05/05/2020
     */
    public function fourniAj($add)
    {
        $this->db->insert('fournisseurs',$add);
    }
    //---------------------------------------------------------maj---------------------
       /**
     * \brief maj d'un fournisseur
     * \param id id du fournisseur
     * \param maj variable à ajouter
     * \return table de variables
     * \autor Augustin LEGRIS
     * \date 05/05/2020
     */
    public function fourniMaj($id,$maj)
    {
        $this->db->update('fournisseurs', $maj ,'FOU_ID='.$id);
    }
    //-----------------------------------------------------------suppression------------
        /**
     * \brief supression d'un fournisseur
     * \param id id du fournisseur a supprimé
     * \autor Augustin LEGRIS
     * \date 05/05/2020
     */
    public function delFourni($id)
    {
        $this->db->delete('fournisseurs','FOU_ID='.$id);
    }
}
