<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    /**
     * \brief 
     * \return  
     * \author Grillet Stéphane
     * \date 
     */
    public function liste()
    {
        $this->templates->display('liste');
    }
    /**
     * \brief 
     * \return  
     * \author Grillet Stéphane
     * \date 
     */
    public function connexion()
    {
        $this->templates->display('connexion');
    }
    /**
     * \brief 
     * \return  
     * \author Grillet Stéphane
     * \date 
     */
    public function inscription()
    {
        $this->templates->display('inscription');
    }
}
