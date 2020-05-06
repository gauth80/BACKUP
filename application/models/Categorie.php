<?php
class Categorie extends CI_Model
{

    public function select_cat()
    {

        $select_cat = $this->db->query("SELECT * FROM categorie ORDER BY cat_id ASC");
        return $select_cat->result();
    }
    public function detail($id)
    {

        $detail = $this->db->where("CAT_ID", $id)->get('categorie');
        return $detail->row();
    }
    public function catAjouts($ajout)
    {

        $this->db->insert('categorie', $ajout);
    }
    public function catModif($id, $modif)
    {

        $this->db->update('categorie', $modif, "CAT_ID=" . $id);
    }
    public function catSuppr($id)
    {

        $this->db->delete('categorie', 'CAT_ID=' . $id);
    }
}
