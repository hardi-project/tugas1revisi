<?PHP
defined('BASEPATH') or exit ('No Direct Script Access Allowed');
	class nyumbang_m extends CI_Model
	{

		function edit_data($where,$table){//untuk mengubah data pada tabel dimana data terssebut ada di db
		return $this->db->get_where($table,$where);
	}

	function get_data($table){//mengambil data dari pada tabel dimana data tersebut terdapat di db
		return $this->db->get($table);
	}

	function insert_data($data,$table){//mengisi data dari pada tabel dimana data tersebut terdapat di db
		$this->db->insert($table,$data);
	}

	function update_data($where,$data,$table){//menambah atau mengubah data dari pada tabel dimana data tersebut terdapat di db
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){//menghapus data dari pada tabel dimana data tersebut terdapat di db
		$this->db->where($where);
		$this->db->delete($table);
	}
	}
