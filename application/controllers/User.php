<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function  __construct()
    {
        parent::__construct();
        //load our helper
        $this->load->helper('url');
        //load our model
        $this->load->model('materi_model');
    }
    public function index()
    {
        $this->load->model('videos_model');
        $this->load->model('materi_model');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $datamat['materi'] = $this->materi_model->get_data();
        $dataall['videos'] = $this->videos_model->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('user/index', $dataall);
        $this->load->view('temp_materi/materi_sd', $datamat);
        $this->load->view('template/user_footer');
    }

    public function download($id)
    {
        $this->load->helper('download');
        $fileinfo = $this->materi_model->download($id);
        $file = 'uploads/' . $fileinfo['filename'];
        force_download($file, NULL);
    }

    public function sd_1()
    {
        $this->load->model('videos_model_sd1');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $dataall['videos'] = $this->videos_model_sd1->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('user/index', $dataall);
        $this->load->view('template/user_footer');
    }
    public function sd_2()
    {
        $this->load->model('videos_model_sd2');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $dataall['videos'] = $this->videos_model_sd2->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('user/index', $dataall);
        $this->load->view('template/user_footer');
    }
    public function smp()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_smp', $data);
        $this->load->view('user/smp');
        $this->load->view('template/user_footer');
    }
    public function smp_1()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_smp', $data);
        $this->load->view('user/smp');
        $this->load->view('template/user_footer');
    }
    public function smp_2()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_smp', $data);
        $this->load->view('user/smp');
        $this->load->view('template/user_footer');
    }
    public function sma()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_sma', $data);
        $this->load->view('user/sma');
        $this->load->view('template/user_footer');
    }
    public function sma_1()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_sma', $data);
        $this->load->view('user/sma');
        $this->load->view('template/user_footer');
    }
    public function sma_2()
    {
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_sma', $data);
        $this->load->view('user/sma');
        $this->load->view('template/user_footer');
    }
}
