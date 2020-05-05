<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Produits extends CI_Controller
{
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
  public function pro_list()
  {
    $this->templates->display('pro_list');
  }
  /**
   * \brief 
   * \return  
   * \author LEGRIS Augustin
   * \date 14/04/2020
   */
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





  
    public function __construct() {
    parent::__construct();
    $this->load->model('Produits_model');
  }

  public function index() {
    //sub - option
    $produits = new Produits_model;

    $data['data']= $this->produits_model->get_produits();

    $this->templates->display('produits/index', $data);
  }
}
