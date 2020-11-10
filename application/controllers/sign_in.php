<?PHP
	class Sign_In extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();

			//Model

			$this->load->model('pengguna_m');
		}

		public function index()
		{$data['tbl_user'] = $this->db->query
	("select * from tbl_user")->result();


			$this->load->view('sign_in_v',$data);
		}
		public function login()
		{

			if($this->pengguna_m->set_password($this->input->post('password'))!= $this->pengguna_m->set_password($this->input->post('password')))
			redirect(site_url().'sign_in/index/error_password');

			$this->pengguna_m->set_username($this->input->post('username'));
			$this->pengguna_m->set_password($this->input->post('password'));

			$query = $this->pengguna_m->view_by_username_password();

			if($query->num_rows())
			{
				$row = $query->row();

				$this->session->set_userdata('username', $row->username);
				
				redirect(site_url().'beranda');

			}

			else
				redirect(site_url().'sign_in/index/error_password');
		}
		public function logout()
		{

			$this->session->unset_userdata('username');

			$this->session->sess_destroy();

			redirect(site_url());
		}
	}
