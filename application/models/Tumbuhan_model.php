<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Tumbuhan Model
 */
class Tumbuhan_model extends CI_Model
{
	private $_table = "tumbuhan";

	public $id_tumbuhan;
	public $nama_tumbuhan;
	public $deskripsi;
	public $foto;

	public function rules()
	{
		return [
			['field' => 'NAMA_TUMBUHAN',
			'label' => 'Tumbuhan',
			'rules' => 'required'],

			['field' => 'DESKRIPSI',
			'label' => 'Deskripsi',
			'rules' => 'required'],

			['field' => 'FOTO',
			'label' => 'Foto',
			'rules' => 'required']
		];
	}

	public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["ID_TUMBUHAN" => $id])->row();
    }
}
?>