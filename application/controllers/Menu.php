<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Manajemen Menu';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['setting'] = $this->db->get('settings')->row_array();

        $data['menus'] = $this->db->order_by('id', 'DESC')->get('user_menus')->result_array();

        // Rules validation
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim|min_length[3]', [
            'required' => 'Inputan Menu tidak boleh kosong.',
            'min_length' => 'Nama Menu minimal 3 karakter.'
        ]);

        // Add new Menu
        if ($this->form_validation->run() == false) {
            $this->load->view('backend/menu/menu', $data);
        } else {
            $this->db->insert('user_menus', ['menu' => $this->input->post('menu')]);

            // Jika success
			$this->session->set_flashdata('swal_icon', 'success');
			$this->session->set_flashdata('swal_title', 'Berhasil');
			$this->session->set_flashdata('swal_text', 'Menu baru telah ditambahkan!');

            redirect('menu');
        }
    }

    public function editMenu()
    {
        $id = $this->input->post('id');
        $menu = $this->input->post('menu');

        $data = ['menu' => $menu];

        $this->db->where('id', $id);
        $this->db->update('user_menus', $data);

        if ($this->db->affected_rows() > 0) {
            // Jika success
			$this->session->set_flashdata('swal_icon', 'success');
			$this->session->set_flashdata('swal_title', 'Berhasil');
			$this->session->set_flashdata('swal_text', 'Menu telah diperbarui!');
        } else {
            // Jika gagal
            $this->session->set_flashdata('swal_icon', 'error');
			$this->session->set_flashdata('swal_title', 'Oops...');
			$this->session->set_flashdata('swal_text', 'Data menu gagal diperbarui!');
        }

        redirect('menu');
    }

    public function deleteMenu($id)
    {
        // Lakukan penghapusan data dari tabel
        $this->db->where('id', $id);
        $this->db->delete('user_menus');

        // Periksa apakah penghapusan berhasil
        if ($this->db->affected_rows() > 0) {
            // Jika success
			$this->session->set_flashdata('swal_icon', 'success');
			$this->session->set_flashdata('swal_title', 'Berhasil');
			$this->session->set_flashdata('swal_text', 'Menu telah dihapus!');
        } else {
            // Jika gagal
            $this->session->set_flashdata('swal_icon', 'error');
			$this->session->set_flashdata('swal_title', 'Oops...');
			$this->session->set_flashdata('swal_text', 'Data menu gagal dihapus!');
        }

        // Redirect ke halaman yang sesuai
        redirect('menu');
    }


    // ======================== SUB MENU CODE ================================
    public function subMenu()
    {
        $data['title'] = 'Manajemen Submenu';
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['setting'] = $this->db->get('settings')->row_array();

        $this->load->model('Menu_model', 'menu');

        $data['subMenus'] = $this->menu->getSubMenu();
        $data['menus'] = $this->db->get('user_menus')->result_array();

        // Rules validation
        $this->form_validation->set_rules('title', 'Title', 'required|trim|min_length[3]', [
            'required' => 'Inputan Nama Submenu harus diisi.',
            'min_length' => 'Nama Submenu minimal 3 karakter.',
        ]);
        $this->form_validation->set_rules('menu_id', 'Menu', 'required|trim', [
            'required' => 'Inputan Nama Menu harus diisi.',
        ]);
        $this->form_validation->set_rules('url', 'URL', 'required|trim', [
            'required' => 'Inputan URL Submenu harus diisi.',
        ]);
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim', [
            'required' => 'Inputan Icon Submenu harus diisi.',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/menu/submenu', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
            ];

            $this->db->insert('user_sub_menus', $data);

            // Jika success
			$this->session->set_flashdata('swal_icon', 'success');
			$this->session->set_flashdata('swal_title', 'Berhasil');
			$this->session->set_flashdata('swal_text', 'Submenu telah ditambahkan!');

            redirect('menu/submenu');
        }
    }

    public function editSubmenu()
    {
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $menu_id = $this->input->post('menu_id');
        $url = $this->input->post('url');
        $icon = $this->input->post('icon');
        $is_active = $this->input->post('is_active');

        $data = [
            'title' => $title,
            'menu_id' => $menu_id,
            'url' => $url,
            'icon' => $icon,
            'is_active' => $is_active,
        ];

        $this->db->where('id', $id);
        $this->db->update('user_sub_menus', $data);

        if ($this->db->affected_rows() > 0) {
            // Jika success
			$this->session->set_flashdata('swal_icon', 'success');
			$this->session->set_flashdata('swal_title', 'Berhasil');
			$this->session->set_flashdata('swal_text', 'Submenu telah diperbarui!');
        } else {
            // Jika gagal
            $this->session->set_flashdata('swal_icon', 'error');
			$this->session->set_flashdata('swal_title', 'Oops...');
			$this->session->set_flashdata('swal_text', 'Data submenu gagal diperbarui!');
        }

        redirect('menu/submenu');
    }

    public function deleteSubmenu($id)
    {
        // Lakukan penghapusan data dari tabel
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menus');

        // Periksa apakah penghapusan berhasil
        if ($this->db->affected_rows() > 0) {
            // Jika success
			$this->session->set_flashdata('swal_icon', 'success');
			$this->session->set_flashdata('swal_title', 'Berhasil');
			$this->session->set_flashdata('swal_text', 'Submenu telah dihapus!');
        } else {
            // Jika gagal
            $this->session->set_flashdata('swal_icon', 'error');
			$this->session->set_flashdata('swal_title', 'Oops...');
			$this->session->set_flashdata('swal_text', 'Data submenu gagal dihapus!');
        }

        // Redirect ke halaman yang sesuai
        redirect('menu/submenu');
    }
}
