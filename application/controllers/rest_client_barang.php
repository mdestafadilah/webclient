<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Created on Aug 26, 2011 by Damiano Venturin @ Squadra Informatica

class Rest_Client_Barang extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		
		// Load the configuration file
		$this->load->config('rest');
		
		// Load the rest client
		$this->load->spark('restclient/2.0.0');		
		// $this->rest->initialize(array('server' => $this->config->item('rest_server')));
		$this->rest->initialize(array('server' => 'http://localhost/webservice/index.php/rest_barang/'));
		// $this->rest->initialize(array('server' => 'http://203.130.212.179/simrs/api/website_service/'));

	}
	public function edit_barang(){
		$id = $this->input->post('idbarang');
		$data = array(
			'nama' => $this->input->post('nama'), 
			'jenis' => $this->input->post('jenis'), 
			'harga' => $this->input->post('harga')
		);
		$query = $this->rest->post('update_barang/id/'.$id.'/format/json', $data);
		
		if($query){
			redirect('rest_client_barang/get_all_barang_crud_html');
		} else {
			echo "<script>alert('Gagal coy'); window.close ();</script>";
		}
	}
	/*
	function update_barang_post() {
		$data = array(
			'nama' => $this->post('nama'),
			'hargasewa' => $this->post('hargasewa'),
			'satuan' => $this->post('satuan'),
			'available' => $this->post('available')
		);
		$id = $this->get('id');
		$query = $this->m_barang->update($data, $id);
		$this->response($query, 200); // 200 being the HTTP response code
	}
	*/
	public function form_edit_barang($id){
		$data['data'] = $this->rest->get('a_barang/id/'.$id.'/format/json');
		/* $header['page_title'] = 'Edit Barang';
		$this->load->view('header_pop', $header); */
		$this->load->view('ebarang_v', $data);
	}

	public function add_barang_rest(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'jenis' => $this->input->post('jenis'),
			'harga' => $this->input->post('harga')
		);
		$query = $this->rest->post('add_barang/svaha/1/format/php', $data); //exit(var_dump($query));
		if($query) {
			redirect('rest_client_barang/get_all_barang_crud_html');
		} else {
			echo "<script>alert('Terjadi Error Saat Query')</script>";
		}
	}

	public function cari_barang_rest(){
		$data = array(
			'nama_dokter' => $this->input->post('nama_dokter')
		);
		$query = $this->rest->post('dokter/format/php', $data); //exit(var_dump($query));
		if($query) {
			exit(var_dump($query));
			redirect('rest_client_barang/get_all_barang_crud_html');
		} else {
			echo "<script>alert('Terjadi Error Saat Query')</script>";
		}
	}


	public function form_add_barang(){
		/* $this->load->view('barang/script'); */
		$this->load->view('ibarang_v');
	}

	public function form_cari_barang(){
		/* $this->load->view('barang/script'); */
		$this->load->view('ibarang_c');
	}


	public function get_all_barang_crud_html(){
		$query =$this->rest->get('all_barang/format/json');
		$data['barang']=$query;
		$this->load->view('tbarang_v', $data);
	}
	
	public function del_barang($id){
		$del = $this->rest->delete('del_barang/id/'.$id.'/format/json');
		redirect('rest_client_barang/get_all_barang_crud_html');
	}

	public function helloWorld()
	{
		echo '<pre>';
		print_r($this->rest->get('helloWorld/format/json'));
		echo '</pre>';
	}

	
	
	public function index()
	{
		$this->get_all_barang_crud_html();
	}
	
}

/* End of rc.php */