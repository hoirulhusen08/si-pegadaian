<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Kontak';
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
		$data['setting'] = $this->db->get_where('settings', ['id' => 1])->row_array();

		$this->load->view('frontend/contact/contact', $data);
	}
}
