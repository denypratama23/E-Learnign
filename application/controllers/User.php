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

    }



    //---------------------------bagian sd-----------------------//
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
        $this->load->model('materi_model');
        $this->load->helper('download');
        $fileinfo = $this->materi_model->download($id);
        $file = 'uploads/' . $fileinfo['filename'];
        force_download($file, NULL);
    }

    public function sd_1()
    {
        $this->load->model('videos_model_sd1');
        $this->load->model('materi_model_sd1');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $dataall['videos'] = $this->videos_model_sd1->get_data();
        $datamat['materi'] = $this->materi_model_sd1->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('user/index', $dataall);
        $this->load->view('temp_materi/materi_sd1', $datamat);
        $this->load->view('template/user_footer');
    }
    public function download_sd1($id)
    {
        $this->load->model('materi_model_sd1');
        $this->load->helper('download');
        $fileinfo = $this->materi_model_sd1->download($id);
        $file = 'uploads/' . $fileinfo['filename'];
        force_download($file, NULL);
    }


    public function sd_2()
    {
        $this->load->model('videos_model_sd2');
        $this->load->model('materi_model_sd2');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $dataall['videos'] = $this->videos_model_sd2->get_data();
        $datamat['materi'] = $this->materi_model_sd2->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header', $data);
        $this->load->view('user/index', $dataall);
        $this->load->view('temp_materi/materi_sd2', $datamat);
        $this->load->view('template/user_footer');
    }
    public function download_sd2($id)
    {
        $this->load->model('materi_model_sd2');
        $this->load->helper('download');
        $fileinfo = $this->materi_model_sd2->download($id);
        $file = 'uploads/' . $fileinfo['filename'];
        force_download($file, NULL);
    }









    //----------------------------bagian smp------------------//

    public function smp()
    {
        $this->load->model('videos_model_smp');
        $this->load->model('materi_model_smp');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $dataall['videos'] = $this->videos_model_smp->get_data();
        $datamat['materi'] = $this->materi_model_smp->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_smp', $data);
        $this->load->view('user/smp', $dataall);
        $this->load->view('temp_materi/materi_smp', $datamat);
        $this->load->view('template/user_footer');
    }
    public function download_smp($id)
    {
        $this->load->model('materi_model_smp');
        $this->load->helper('download');
        $fileinfo = $this->materi_model_smp->download($id);
        $file = 'uploads/' . $fileinfo['filename'];
        force_download($file, NULL);
    }
    public function smp_1()
    {
        $this->load->model('videos_model_smp1');
        $this->load->model('materi_model_smp1');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $dataall['videos'] = $this->videos_model_smp1->get_data();
        $datamat['materi'] = $this->materi_model_smp1->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_smp', $data);
        $this->load->view('user/smp', $dataall);
        $this->load->view('temp_materi/materi_smp1', $datamat);
        $this->load->view('template/user_footer');
    }
    public function download_smp1($id)
    {
        $this->load->model('materi_model_smp1');
        $this->load->helper('download');
        $fileinfo = $this->materi_model_smp1->download($id);
        $file = 'uploads/' . $fileinfo['filename'];
        force_download($file, NULL);
    }
    public function smp_2()
    {
        $this->load->model('videos_model_smp2');
        $this->load->model('materi_model_smp2');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $dataall['videos'] = $this->videos_model_smp2->get_data();
        $datamat['materi'] = $this->materi_model_smp2->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_smp', $data);
        $this->load->view('user/smp', $dataall);
        $this->load->view('temp_materi/materi_smp2', $datamat);
        $this->load->view('template/user_footer');
    }
    public function download_smp2($id)
    {
        $this->load->model('materi_model_smp2');
        $this->load->helper('download');
        $fileinfo = $this->materi_model_smp2->download($id);
        $file = 'uploads/' . $fileinfo['filename'];
        force_download($file, NULL);
    }








    //----------------------bagain sma---------------------------//
    public function sma()
    {
        $this->load->model('videos_model_sma');
        $this->load->model('materi_model_sma');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $dataall['videos'] = $this->videos_model_sma->get_data();
        $datamat['materi'] = $this->materi_model_sma->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_sma', $data);
        $this->load->view('user/sma', $dataall);
        $this->load->view('temp_materi/materi_sma', $datamat);
        $this->load->view('template/user_footer');
    }
    public function download_sma($id)
    {
        $this->load->model('materi_model_sma');
        $this->load->helper('download');
        $fileinfo = $this->materi_model_sma->download($id);
        $file = 'uploads/' . $fileinfo['filename'];
        force_download($file, NULL);
    }
    public function sma_1()
    {
        $this->load->model('videos_model_sma1');
        $this->load->model('materi_model_sma1');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $dataall['videos'] = $this->videos_model_sma1->get_data();
        $datamat['materi'] = $this->materi_model_sma1->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_sma', $data);
        $this->load->view('user/sma', $dataall);
        $this->load->view('temp_materi/materi_sma1', $datamat);
        $this->load->view('template/user_footer');
    }
    public function download_sma1($id)
    {
        $this->load->model('materi_model_sma1');
        $this->load->helper('download');
        $fileinfo = $this->materi_model_sma1->download($id);
        $file = 'uploads/' . $fileinfo['filename'];
        force_download($file, NULL);
    }
    public function sma_2()
    {
        $this->load->model('videos_model_sma2');
        $this->load->model('materi_model_sma2');
        //$dataall['videos'] = $this->db->get_where('videos', ['mapel' => 'Ilmu Pengetahuan Alam'])->row_array();
        $dataall['videos'] = $this->videos_model_sma2->get_data();
        $datamat['materi'] = $this->materi_model_sma2->get_data();
        $data['user'] = $this->db->get_where('user', ['name' => $this->session->userdata('name')])->row_array();
        $this->load->view('template/user_header_sma', $data);
        $this->load->view('user/sma', $dataall);
        $this->load->view('temp_materi/materi_sma2', $datamat);
        $this->load->view('template/user_footer');
    }
    public function download_sma2($id)
    {
        $this->load->model('materi_model_sma2');
        $this->load->helper('download');
        $fileinfo = $this->materi_model_sma2->download($id);
        $file = 'uploads/' . $fileinfo['filename'];
        force_download($file, NULL);
    }
}
