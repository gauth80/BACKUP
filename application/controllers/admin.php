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
    public function adminAccueil()
    {
        $this->templates->display('adminAccueil');
    }
    /**
     * \brief 
     * \return  
     * \author Grillet Stéphane
     * \date 
     */
    public function connexionAdmin()
    {
        $this->templates->display('connexionAdmin');
    }

}
