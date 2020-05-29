<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fournisseurs extends CI_Controller
{
  /**
   * \brief page de la liste des fournisseurs
   * \return  page fournisseur avec tableaux de variable
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function fourni_list()
  {
    $data["fournisseurs"]=$this->fournisseur->fourniList();
    $this->templates->display('fournisseurs/fourni_list', $data);
  }
  /**
   * \brief page d'ajout fournisseur
   * \return  page formulaire d'ajout fournisseur
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function fourniAjouts()
  {
    if($this->input->post())
    {
      $adresse ="/^[0-9a-zA-Z]+(?:(?:[\'\s\-\/])?[a-zA-Z]+)*$/";
      $ref = "/^[0-9a-zA-Z]*$/";

      $this->form_validation->set_rules('adresse','adresse',"required|regex_match[$adresse]",array('required' => 'Il faut une %s ','regex_match' => 'Il faut une %s '));
      $this->form_validation->set_rules('ref','Références',"required|regex_match[$ref]|is_unique[fournisseurs.FOU_REF]",array('required' => 'La %s manquante','regex_match' => 'La %s incorrect',"is_unique"=>'La %s existe déjà'));
      $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

      if($this->form_validation->run() == FALSE)
      {
        $this->templates->display('fournisseurs/fourniAjouts');
      }
      else
      {
          $res=$this->input->post();
          $data=array('FOU_ADRESSE'=> $res['adresse'],
                      'FOU_REF'=> $res['ref']
                      );
          $this->fournisseur->fourniAj($data);
          redirect('fournisseurs/fourni_list');
      }
    }
    else{
          $this->templates->display('fournisseurs/fourniAjouts');
        }  
   }
  /**
   * \brief page de modification d'un fournisseur
   * \return  page formulaire de modification d'un fournisseur
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function fourniModif($id)
  {

    $fourni=$this->fournisseur->fourniTab($id);
    $data["fournisseurs"]=$fourni;
    if($this->input->post())
    {
      $adresse ="/^[0-9a-zA-Z]+(?:(?:[\'\s\-\/])?[a-zA-Z]+)*$/";
      $ref = "/^[0-9a-zA-Z]*$/";

      $this->form_validation->set_rules('adresse','adresse',"required|regex_match[$adresse]",array('required' => 'Il faut une %s ','regex_match' => 'Il faut une %s '));
      $this->form_validation->set_rules('ref','Références',"required|regex_match[$ref]|is_unique[fournisseurs.FOU_REF]",array('required' => 'La %s manquante','regex_match' => 'La %s incorrect',"is_unique"=>'La %s existe déjà'));
      $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

      if($this->form_validation->run() == FALSE)
      {
          $this->templates->display('fournisseurs/fourniModif',$data);
      }
      else
      {
          $res=$this->input->post();
          $add=array('FOU_ADRESSE'=> $res['adresse'],
                      'FOU_REF'=> $res['ref']
                      );
          $this->fournisseur->fourniMaj($id,$add);
          redirect('fournisseurs/fourni_list');
      }
    }
    else{
          $this->templates->display('fournisseurs/fourniModif',$data);
        }    
   }
    /**
   * \brief retirer un fournisseurs de la liste
   * \return  boutton suppression fournisseurs
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function fourniDel($id)
  {
    $this->fournisseur->Delfourni($id); 
    redirect('fournisseurs/fourni_list');
  }
}