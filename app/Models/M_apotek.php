<?php

namespace App\Models;

use CodeIgniter\Model;

class M_apotek extends Model
{
	public function tampil($darren){
		return $this->db->table($darren)
						->get()
						->getResult();	
	}

	public function join($table1, $table2, $on){
		return $this->db->table($table1)
						->join($table2, $on, 'left')
						->get()
						->getResult();	
	}

	public function joinWhere($table1, $table2, $on, $where){
		return $this->db->table($table1)
						->join($table2, $on, 'right')
						->getWhere($where)
						->getRow();	
	}

	public function tambah($table,$isi){
		return $this->db->table($table)
						->insert($isi);
	}

	public function upload($file){
		$imageName = $file ->getName(); 
		$file->move(ROOTPATH . 'public/img', $imageName);
	}

	public function hapus($table,$where){
		return $this->db->table($table)
						->delete($where);
	}	

	public function getWhere($darren,$where){
		return $this->db->table($darren)
						->getWhere($where)
						->getRow();	
	}

	public function edit($darren,$isi,$where){
		
		return $this->db->table($darren)
						->update($isi,$where);	
	}
	
	public function jointwo($table1, $table2, $table3, $on, $on2){
		return $this->db->table($table1)
						->join($table2, $on, 'left')
						->join($table3, $on2, 'left')
						->get()
						->getResult();	
	}

	public function edit2($table,$isi){
		
		return $this->db->table($table)
						->update($isi);	
	}

	public function selesai1($isi){
		
		return $this->db->table('transaksi')
						->insertBatch($isi);	
	}

	public function selesai2(){
		
		return $this->db->table('nota')
						->truncate();	
	}

	public function tampilfilter($table, $filter){
		$columns = $this->db->getFieldNames($table);
		
		$filteredColumns = array_diff($columns, [$filter]);

		return $this->db->table($table)
						->select($filteredColumns)
						->get()
						->getResult();	
	}

}