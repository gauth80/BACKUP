<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produits extends CI_Controller  {
  public function __construct() {
    parent::__construct();
    $this->load->model('Produits_model')
             ->helper('form')
             ->library('form_validation');

  }
  /* vue cotée Client*/
  public function index() {
    //$produits = new Produits_model;
    $data['data']= $this->produits_model->get_produits_for_client();
    $this->templates->display('produits/index', $data);
  }

  /* vue cotée admin, si vous voulais choisir ou non de mettre d'autres donnée*/
  public function pro_list() {
    $data['data']= $this->produits_model->get_produits_for_admin();
    $this->templates->display('pro_list', $data);
  }

  public function proAjouts()
  {
    $this->templates->display('proAjouts');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function proModif()
  {
    $this->templates->display('proModif');
  }
  /**
   * \brief 
   * \return  
   * \author GRILLET Stéphane
   * \date 16/04/2020
   */
  public function liste()
  {
    $this->templates->display('liste');
  }
  /**
   * \brief 
   * \return  
   * \author GRILLET Stéphane
   * \date 16/04/2020
   */



  public function detail()
  {
    $this->templates->display('detail');
  }





  


}
