<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jarditou extends CI_Controller
{
    // ---------- Partie index ----------
    public function index()
    {
        $this->template->display('acceuil');
    }
    // ---------- Partie tableau ----------
    public function liste()
    {

        $resultlist = $this->produits->afficher();
        $data["afficher"] = $resultlist;

        $this->template->display('tableau', $data);
    }
    // ---------- Partie detail ----------
    public function detail($id)
    {
        $resultdetail = $this->produits->detail($id);
        $data["detail"] = $resultdetail;

        $this->template->display('detail', $data);
    }
    // ---------- Partie Admin ----------
    public function admin()
    {
        $this->template->display('admin');
    }
    // ---------- Partie ajout ----------
    public function ajout_produits()
    {

        $res_cat = $this->categories->select_cat();
        $data["select_cat"] = $res_cat;

        $resultatajout = $this->input->post();
        $this->form_validation->set_rules('ref', 'ref', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('cat', 'cat', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('lib', 'lib', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('desc', 'desc', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('prix', 'prix', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('stock', 'stock', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('couleur', 'couleur', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('bloque', 'bloque', 'required', array('required' => 'Veuillez renseigner ce champ.'));

        if ($this->form_validation->run() == false) {
            $this->template->display('ajout_produits', $data);
        } else {
            $ajout = array(
                'pro_cat_id' => $resultatajout['cat'],
                'pro_ref' => $resultatajout['ref'],
                'pro_libelle' => $resultatajout['lib'],
                'pro_description' => $resultatajout['desc'],
                'pro_prix' => $resultatajout['prix'],
                'pro_stock' => $resultatajout['stock'],
                'pro_couleur' => $resultatajout['couleur'],
                'pro_d_ajout' => date('Y-m-d'),
                'pro_bloque' => $resultatajout['bloque']
            );
            $id = $this->produits->ajout_produits($ajout);

            $config['upload_path'] = 'assets/img/jarditou_photos/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['file_name'] = $id;
            $this->upload->initialize($config);
            $this->upload->do_upload("ext");
            $type = array("pro_photo" => substr($this->upload->data('file_ext'), 1));
            $this->produits->img($id, $type);
            redirect('jarditou/liste');
        }
    }
    // ---------- Partie affichage avant formulaire de modification ----------
    public function aff_modif_produits()
    {

        $pro_modif = $this->produits->afficher();
        $data["afficher"] = $pro_modif;

        $this->template->display('aff_modif_produits', $data);
    }
    // ---------- Partie modification ----------
    public function modif_produits($id)
    {

        $res_cat = $this->categories->select_cat();
        $data["select_cat"] = $res_cat;

        $res_modif = $this->produits->detail($id);
        $data["detail"] = $res_modif;

        if ($this->input->post()) {
            $resultatmodif = $this->input->post();
            $this->form_validation->set_rules('ref', 'ref', 'required', array('required' => 'Veuillez renseigner ce champ.'));
            $this->form_validation->set_rules('cat', 'cat', 'required', array('required' => 'Veuillez renseigner ce champ.'));
            $this->form_validation->set_rules('lib', 'lib', 'required', array('required' => 'Veuillez renseigner ce champ.'));
            $this->form_validation->set_rules('desc', 'desc', 'required', array('required' => 'Veuillez renseigner ce champ.'));
            $this->form_validation->set_rules('prix', 'prix', 'required', array('required' => 'Veuillez renseigner ce champ.'));
            $this->form_validation->set_rules('stock', 'stock', 'required', array('required' => 'Veuillez renseigner ce champ.'));
            $this->form_validation->set_rules('couleur', 'couleur', 'required', array('required' => 'Veuillez renseigner ce champ.'));

            if ($this->form_validation->run() == false) {
                $this->template->display('modif_produits', $data);
            } else {
                $modif = array(
                    'pro_cat_id' => $resultatmodif['cat'],
                    'pro_ref' => $resultatmodif['ref'],
                    'pro_libelle' => $resultatmodif['lib'],
                    'pro_description' => $resultatmodif['desc'],
                    'pro_prix' => $resultatmodif['prix'],
                    'pro_stock' => $resultatmodif['stock'],
                    'pro_couleur' => $resultatmodif['couleur'],
                    'pro_d_modif' => date('Y-m-d H-i-s'),
                    'pro_bloque' => $resultatmodif['bloque']
                );
                $this->produits->modif_produits($id, $modif);

                redirect('jarditou/aff_modif_produits');
            }
        } else {

            $this->template->display('modif_produits', $data);
        }
    }

    // ---------- Partie modification d'image ----------

    public function modif_img($id)
    {

        $this->load->model('produits');
        $row = $this->produits->detail($id);

        if ($this->input->post()) {
            $config['upload_path'] = 'assets/img/jarditou_photos/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['file_name'] = $id;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('ext')) {
                var_dump($this->upload->data());
                echo "Erreur de format";
                exit;
            } else {
                unlink("assets/img/jarditou_photos/" . $row->pro_id . "." . $row->pro_photo);
                $type = array("pro_photo" => substr($this->upload->data('file_ext'), 1));
                $this->produits->img($id, $type);
                redirect('jarditou/aff_modif_produits');
            }
        }
    }
    // ---------- Partie suppression ----------
    public function suppr_produits($id)
    {

        $row = $this->produits->detail($id);
        unlink("assets/img/jarditou_photos/" . $row->pro_id . "." . $row->pro_photo);
        $this->produits->suppr_produits($id);
        redirect('jarditou/liste');
    }
    // ---------- Partie contact ----------
    public function contact()
    {

        $res_contact = $this->input->post();
        $this->form_validation->set_rules('nom', 'nom', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('prenom', 'prenom', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('ddn', 'ddn', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('email', 'email', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('sujet', 'sujet', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('question', 'question', 'required', array('required' => 'Veuillez renseigner ce champ.'));

        if ($this->form_validation->run() == false) {
            $this->template->display('contact', $res_contact);
            //var_dump($this->form_validation->error_array());
            //var_dump($res_contact);
        } else {
            $ajout = array(
                'C_nom' => $res_contact['nom'],
                'C_prenom' => $res_contact['prenom'],
                'C_sexe' => $res_contact['sexe'],
                'C_ddn' => $res_contact['ddn'],
                'C_cpostal' => $res_contact['cpostal'],
                'C_adresse' => $res_contact['adresse'],
                'C_ville' => $res_contact['ville'],
                'C_mail' => $res_contact['email'],
                'C_sujet' => $res_contact['sujet'],
                'C_question' => $res_contact['question'],
                'C_date' => date('Y-m-d H-i-s')
            );
            $this->contact->ajout_contact($ajout);
            redirect('jarditou/index');
        }
    }
    // ---------- Partie inscription ----------
    public function inscription()
    {

        $res_inscri = $this->input->post();
        $this->form_validation->set_rules('nom', 'nom', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('prenom', 'prenom', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('email', 'email', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('mdp', 'mdp', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('v_mdp', 'v_mdp', 'required|matches[mdp]', array('required' => 'Veuillez renseigner ce champ.'));

        if ($this->form_validation->run() == false) {
            $this->template->display('inscription', $res_inscri);
            //var_dump($this->form_validation->error_array());
            //var_dump($res_inscri);
        } else {
            $ajout = array(
                'compt_nom' => $res_inscri['nom'],
                'compt_prenom' => $res_inscri['prenom'],
                'compt_email' => $res_inscri['email'],
                'compt_mdp' => $res_inscri['mdp'],
                'compt_date_inscri' => date('Y-m-d H-i-s')
            );
            $id = $this->comptes->crea_compte($ajout);
            redirect('jarditou/connexion');
        }
    }
    // ---------- Partie inscription ----------
    public function connexion()
    {

        $res_inscri = $this->input->post();
        $this->form_validation->set_rules('email', 'email', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('mdp', 'mdp', 'required', array('required' => 'Veuillez renseigner ce champ.'));
        $this->form_validation->set_rules('v_mdp', 'v_mdp', 'required|matches[mdp]', array('required' => 'Veuillez renseigner ce champ.'));

        if ($this->form_validation->run() == false) {
            $this->template->display('inscription', $res_inscri);
            //var_dump($this->form_validation->error_array());
            //var_dump($res_inscri);
        } else {
            $ajout = array(
                'compt_nom' => $res_inscri['nom'],
                'compt_prenom' => $res_inscri['prenom'],
                'compt_email' => $res_inscri['email'],
                'compt_mdp' => $res_inscri['mdp'],
                'compt_date_inscri' => date('Y-m-d H-i-s')
            );
            $id = $this->comptes->crea_compte($ajout);
            redirect('jarditou/connexion');
        }
    }
}