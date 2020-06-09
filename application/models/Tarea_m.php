<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('America/Argentina/Mendoza');

class Tarea_m extends CI_Model{
	public function showAllTarea(){
		$this->db->order_by('creada_en', 'desc');
		$query = $this->db->get('tbl_tareas');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function addTarea(){
		$field = array(
			'nombre'=>$this->input->post('txtNombre'),
			'cant_horas'=>$this->input->post('txtCant_horas'),
			'cant_h_x_d'=>$this->input->post('txtCant_h_x_d'),
			'id_employee'=>$this->input->post('txtIDEmpleado'),
			'creada_en'=>date('Y-m-d H:i:s')
			);
		$this->db->insert('tbl_tareas', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function editTarea(){
		$id = $this->input->get('id_tarea');
		$this->db->where('id_tarea', $id);
		$query = $this->db->get('tbl_tareas');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function updateTarea(){
		$id = $this->input->post('txtId');
		$field = array(
		'nombre'=>$this->input->post('txtNombre'),
		'cant_horas'=>$this->input->post('txtCant_horas'),
		'cant_h_x_d'=>$this->input->post('txtCant_h_x_d'),
		'id_employee'=>$this->input->post('txtIDEmpleado'),
		'actualizada_en'=>date('Y-m-d H:i:s')
		);
		$this->db->where('id_tarea', $id);
		$this->db->update('tbl_tareas', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function deleteTarea(){
		$id = $this->input->get('id_tarea');
		$this->db->where('id_tarea', $id);
		$this->db->delete('tbl_tareas');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}