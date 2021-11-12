<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
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
        $this->load->model('Guru_model');
    }

    public function index()
    {
        $data['guru'] = $this->Guru_model->select_all_data("guru");
        $this->load->view('guru/templates/header');
        $this->load->view('guru/dashboard', $data);
        $this->load->view('guru/templates/footer');
    }

    public function task()
    {
        redirect('guru/nilai/' . $this->input->post('id_guru'));
    }

    public function nilai($id)
    {
        $data['matpel'] = $this->Guru_model->select_data_join_2("siswa_guru", "siswa", "id_siswa", "guru", "id_guru", 'siswa_guru.id_guru', $id);
        $this->load->view('guru/templates/header');
        $this->load->view('guru/task', $data);
        $this->load->view('guru/templates/footer');
    }

    public function updateNilai($id)
    {
        $date = date('Y-m-d H:i:s');
        $data = array(
            'nilai' => $this->input->post('nilai'),
            'updated' => $date
        );
        $query = $this->Guru_model->update("siswa_guru", "id_siswa_guru", $id, $data);
        if ($query) {
            $this->session->set_flashdata('edit', "Tambah Berhasil");
        } else {
            $this->session->set_flashdata('error', "Tambah Gagal");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}
