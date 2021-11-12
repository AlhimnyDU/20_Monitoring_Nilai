<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
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
        $this->load->model('Siswa_model');
    }

    public function index()
    {
        $data['siswa'] = $this->Siswa_model->select_all_data("siswa");
        $this->load->view('siswa/templates/header');
        $this->load->view('siswa/dashboard', $data);
        $this->load->view('siswa/templates/footer');
    }

    public function task()
    {
        redirect('siswa/nilai/' . $this->input->post('id_siswa'));
    }

    public function nilai($id)
    {
        $data['matpel'] = $this->Siswa_model->select_data_join_2("siswa_guru", "siswa", "id_siswa", "guru", "id_guru", 'siswa_guru.id_siswa', $id);
        $this->load->view('siswa/templates/header');
        $this->load->view('siswa/task', $data);
        $this->load->view('siswa/templates/footer');
    }
}
