<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Categories extends CI_Controller
{
  /**
   * \brief permetaffichant toute les infos de la table catégorie
   * \return  permetaffichant toute les infos de la table catégorie
   * \author Grillet Stéphane
   * \date 05/05/2020
   */

  public function cat_list()
  {
    $data["select_cat"] = $this->Categorie->select_cat();
    $this->templates->display('categorie/cat_list', $data);
  }
  /**
   * \brief page de modification d'une catégorie
   * \return  page formulaire de modification d'une catégorie
   * \author Grillet Stéphane
   * \date 05/05/2020
   */
  public function catAjouts()
  {

    $data["select_cat"] = $this->Categorie->select_cat();

    $resultajout = $this->input->post();
    $this->form_validation->set_rules('cat_cat', 'cat_cat', 'required', array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_rules('libelle', 'libelle', "required", array('required' => 'Veuillez renseigner ce champ.'));
    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    if ($this->form_validation->run() == false) {
      $this->templates->display('categorie/catAjouts', $data);
    } else {
      $ajout = array(
        'CAT_CAT_ID' => $resultajout['cat_cat'],
        'CAT_LIBELLE' => $resultajout['libelle'],
        'PER_ID' => $resultajout['cat_cat'],
        'CAT_D_AJOUT' => date('Y-m-d')
      );
      $this->Categorie->catAjouts($ajout);
      redirect('categories/cat_list');
    }
  }
  /**
   * \brief page de modification d'une catégorie
   * \return  page formulaire de modification d'une catégorie
   * \author Grillet Stéphane
   * \date 06/05/2020
   */
  public function catModif($id)
  {
    $data["select_cat"] = $this->Categorie->select_cat();
    $data["detail"] = $this->Categorie->detail($id);
    
    if ($this->input->post()) {
      $this->form_validation->set_rules('libelle', 'libelle', "required", array('required' => 'Veuillez renseigner ce champ.'));
      $this->form_validation->set_rules('cat_cat', 'cat_cat', 'required', array('required' => 'Veuillez renseigner ce champ.'));
      $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

      if ($this->form_validation->run() == false) {
        $this->templates->display('categorie/catModif', $data);
      } else {

        $resultmodif = $this->input->post();
        $modif = array(
          'CAT_LIBELLE' => $resultmodif['libelle'],
          'CAT_CAT_ID' => $resultmodif['cat_cat'],
          'PER_ID' => $resultmodif['cat_cat'],
          'CAT_D_MODIF' => date('Y-m-d H-i-s')
        );
        $this->Categorie->catModif($id, $modif);
        redirect('categories/cat_list');
      }
    } else {
      $this->templates->display('categorie/catModif', $data);
    }
  }
  /**
   * \brief Suppression d'une catégorie
   * \return  Boutton de suppression d'une catégorie
   * \author Grillet Stéphane
   * \date 11/05/2020
   */
  public function catSuppr($id)
  {
    $row = $this->Categorie->detail($id);
    $this->Categorie->catSuppr($id);
    redirect('categories/cat_list');
  }
}