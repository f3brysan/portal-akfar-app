<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('m_login');
				$this->load->library(array('form_validation'));
				$this->load->helper(array('url', 'language', 'form'));
    }

	public function index()
	{
		// $this->load->view('header');
		$this->load->view('login');
	}

	public function cek_login() {
		$username = strtolower($this->input->post('username', TRUE));
		$password = strtolower($this->input->post('password', TRUE));
		$data = array('username' => $username,
						'password' => md5($password)
			);
		// dump($data);
		$this->load->model('m_login'); // load model_user
		$hasil = $this->m_login->cek_user($data);
		// dump($hasil);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['status'] = 'login';
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$sess_data['nama'] = $sess->nama;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {

				redirect('admin');
			}
			elseif ($this->session->userdata('level')=='mahasiswa') {
				redirect('mahasiswa');

			}
			elseif ($this->session->userdata('level')=='dosen') {
				redirect('dosen');

			}
			elseif ($this->session->userdata('level')=='prodi') {
				redirect('prodi');

			}
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}
