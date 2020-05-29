<?php


defined('BASEPATH') or exit('No direct script access allowed');

// toucher pas à ma PUTAIN d'indentation, merci <3
class Produits extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Produits_model')
                   ->helper(array('inflector', 'form'))
                   ->library('form_validation');
    }

    //a defaut d'avoir un Ctrl central
    public function index() {
        $data['data'] = $this->produits_model->get_produits_for_client();
        $data['cat_exist'] = $this->produits_model->get_categories_data();
        $this->templates->display('produits/index', $data);
    }

    public function list() {
        $data['data'] = $this->produits_model->get_produits_for_personnal();
        $data['cat_exist'] = $this->produits_model->get_categories_data();
        $this->templates->display('produits/pro_list', $data);
    }

    public function ajout() {
        $data['data'] = $this->produits_model->get_produits_for_personnal();
        $data['cat_exist'] = $this->produits_model->get_categories_data();
        $this->templates->display('produits/proAjouts', $data);
    }

    public function modif() {
        $data['data'] = $this->produits_model->get_produits_for_personnal();
        $data['cat_exist'] = $this->produits_model->get_categories_data();
        $this->templates->display('produits/proModif', $data);
    }

    public function del() {
        $data['data'] = $this->produits_model->get_produits_for_personnal();
        $data['cat_exist'] = $this->produits_model->get_categories_data();
        $this->templates->display('produits/proDelete', $data);
    }

    public function create_produits() {

        if($this->input->post('create_pro')) {
            
            if($this->form_validation->run('create') == FALSE) {

                //retribution des data
                $data['data'] = $this->produits_model->get_produits_for_personnal();
                $data['cat_exist'] = $this->produits_model->get_categories_data();
                $this->templates->display('produits/proAjouts', $data);
            } else {
                $config['upload_path'] = './assets/img/produits/listes/';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '800000'; 
                $config['max_width'] = '2000';
                $config['max_height'] = '2000';
                $slug = url_title($this->input->post('pro_lib'), '_', true);
                $config['file_name'] = $slug;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if(!$this->upload->do_upload($pro_img = 'img', $slug)) {

                    $errors = array('error' => $this->upload->display_errors());
                    $pro_img = 'noimage.jpg';
                    $data['data'] = $this->produits_model->get_produits_for_personnal();
                    $data['cat_exist'] = $this->produits_model->get_categories_data();
                    $this->templates->display('produits/proAjouts', $data);
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $pro_img = substr($this->upload->data('file_ext'), 1);
                    $this->produits_model->insert_produits($pro_img, $slug);
                    $data['data'] = $this->produits_model->get_produits_for_personnal();
                    $data['cat_exist'] = $this->produits_model->get_categories_data();
                    $this->templates->display('produits/pro_list', $data);
                }
            }
        }
    }


    public function modifiez_produits() {

        if($this->input->post('modifiez_pro')) {
       
            if($this->form_validation->run('update') == FALSE) {

                $data['data'] = $this->produits_model->get_produits_for_personnal();
                $data['cat_exist'] = $this->produits_model->get_categories_data();
                $this->templates->display('produits/proModif', $data);
            } else {
                $config['upload_path'] = './assets/img/produits/listes/';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '800000'; 
                $config['max_width'] = '2000';
                $config['max_height'] = '2000';
                $slug = url_title($this->input->post('pro_lib'), '_', true);
                $config['file_name'] = $slug;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if(!$this->upload->do_upload($pro_img = 'img', $slug)) {

                    $errors = array('error' => $this->upload->display_errors());
                    $pro_img = 'noimage.jpg';
                    redirect('produits/proModif');
                } else {

                    $data = array('upload_data' => $this->upload->data());
                    $pro_img = substr($this->upload->data('file_ext'), 1);
                    $this->produits_model->update_produits($pro_img, $slug);
                    redirect('produits/pro_list');
                }
            }
        }
    }


    public function delete_produits() {
        if ($this->input->post('delete_pro')) {
            $id = $this->input->post('pro_exist');
            $this->produits_model->delete_produits($id);
            redirect('produits/pro_list');
        }
    }

    public function details($slug) {
        $detail = $this->produits_model->get_produits($slug);
        $data['detail'] = $detail;
        $this->templates->display('produits/detail', $data);     
    }
}
