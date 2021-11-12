<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $this->load->view('admin/templates/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/templates/footer');
    }

    public function siswa()
    {
        $data['siswa'] = $this->Admin_model->select_all_data("siswa");
        $this->load->view('admin/templates/header');
        $this->load->view('admin/siswa', $data);
        $this->load->view('admin/templates/footer');
    }

    public function addSiswa()
    {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'kelas' => $this->input->post('kelas'),
            'created' => $date,
            'updated' => $date
        );
        $query = $this->Admin_model->insert("siswa", $data);
        if ($query) {
            $this->session->set_flashdata('input', true);
        } else {
            $this->session->set_flashdata('error', "Tambah Gagal");
        }
        redirect('admin/siswa');
    }

    public function updateSiswa($id)
    {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'kelas' => $this->input->post('kelas'),
            'updated' => $date
        );
        $query = $this->Admin_model->update("siswa", "id_siswa", $id, $data);
        if ($query) {
            $this->session->set_flashdata('edit', true);
        } else {
            $this->session->set_flashdata('error', "Tambah Gagal");
        }
        redirect('admin/siswa');
    }

    public function deleteSiswa($id)
    {
        $query = $this->Admin_model->delete("siswa", "id_siswa", $id);
        if ($query) {
            $this->session->set_flashdata('delete', true);
        } else {
            $this->session->set_flashdata('error', "Tambah Gagal");
        }
        redirect('admin/siswa');
    }

    public function guru()
    {
        $data['guru'] = $this->Admin_model->select_all_data("guru");
        $this->load->view('admin/templates/header');
        $this->load->view('admin/guru', $data);
        $this->load->view('admin/templates/footer');
    }

    public function addGuru()
    {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'nama_guru' => $this->input->post('nama_guru'),
            'matpel' => $this->input->post('matpel'),
            'created' => $date,
            'updated' => $date
        );
        $query = $this->Admin_model->insert("guru", $data);
        if ($query) {
            $this->session->set_flashdata('input', true);
        } else {
            $this->session->set_flashdata('error', "Tambah Gagal");
        }
        redirect('admin/guru');
    }

    public function updateGuru($id)
    {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'nama_guru' => $this->input->post('nama_guru'),
            'matpel' => $this->input->post('matpel'),
            'updated' => $date
        );
        $query = $this->Admin_model->update("guru", "id_guru", $id, $data);
        if ($query) {
            $this->session->set_flashdata('edit', true);
        } else {
            $this->session->set_flashdata('error', "Tambah Gagal");
        }
        redirect('admin/guru');
    }

    public function deleteGuru($id)
    {
        $query = $this->Admin_model->delete("guru", "id_guru", $id);
        if ($query) {
            $this->session->set_flashdata('delete', true);
        } else {
            $this->session->set_flashdata('error', "Tambah Gagal");
        }
        redirect('admin/guru');
    }

    public function matpel($id)
    {
        $data['id_siswa'] = $id;
        $data['matpel'] = $this->Admin_model->select_data_join_2("siswa_guru", "siswa", "id_siswa", "guru", "id_guru", 'siswa_guru.id_siswa', $id);
        $data['guru'] = $this->Admin_model->select_all_data("guru");
        $this->load->view('admin/templates/header');
        $this->load->view('admin/matpel', $data);
        $this->load->view('admin/templates/footer');
    }

    public function addMatpel($id)
    {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'id_guru' => $this->input->post('id_guru'),
            'id_siswa' => $id,
            'created' => $date,
            'updated' => $date
        );
        $query = $this->Admin_model->insert("siswa_guru", $data);
        if ($query) {
            $this->session->set_flashdata('input', true);
        } else {
            $this->session->set_flashdata('error', "Tambah Gagal");
        }
        redirect('admin/matpel/' . $id);
    }

    public function deleteMatpel($id)
    {
        $query = $this->Admin_model->delete("siswa_guru", "id_siswa_guru", $id);
        if ($query) {
            $this->session->set_flashdata('delete', true);
        } else {
            $this->session->set_flashdata('error', "Tambah Gagal");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}
