<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Penyakit Model
 */
class Penyakit_model extends CI_Model
{
	private $_table = "penyakit";

	public $id_penyakit;
	public $nama_penyakit;
	public $bahan;
	public $penggunaan;

	public function rules()
	{
		return [
			['field' => 'NAMA_PENYAKIT',
			'label' => 'Penyakit',
			'rules' => 'required'],

			['field' => 'BAHAN',
			'label' => 'Bahan',
			'rules' => 'required'],

			['field' => 'PENGGUNAAN',
			'label' => 'Penggunaan',
			'rules' => 'required']
		];
	}

	public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["ID_PENYAKIT" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->NAMA_PENYAKIT = $post["NAMA_PENYAKIT"];
        $this->BAHAN = $post["BAHAN"];
        $this->PENGGUNAAN = $post["PENGGUNAAN"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->ID_PENYAKIT = $post["id"];
        $this->NAMA_PENYAKIT = $post["NAMA_PENYAKIT"];
        $this->BAHAN = $post["BAHAN"];
        $this->PENGGUNAAN = $post["PENGGUNAAN"];
        return $this->db->update($this->_table, $this, array('ID_PENYAKIT' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("ID_PENYAKIT" => $id));
    }

    public function get_penyakit_keyword()
    {
    	$cari = $this->input->GET('cari', TRUE);
    	$data = $this->db->query("SELECT * FROM penyakit WHERE NAMA_PENYAKIT LIKE '%$cari%' ");
    	return $data->result();
    }
}

?>