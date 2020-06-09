<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Tarea extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('tarea_m', 't');
	}

	function index(){
		$this->load->view('layout/header');
		$this->load->view('tarea/index');
		$this->load->view('layout/footer');
	}

	public function showAllTarea(){
		$result = $this->t->showAllTarea();
		echo json_encode($result);
	}

	public function addTarea(){
		$result = $this->t->addTarea();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function editTarea(){
		$result = $this->t->editTarea();
		echo json_encode($result);
	}

	public function updateTarea(){
		$result = $this->t->updateTarea();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteTarea(){
		$result = $this->t->deleteTarea();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}