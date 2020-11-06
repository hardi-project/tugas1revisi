<?PHP
	class history extends CI_Controller
	{
		//Constructor

		public function __construct()
		{
			parent::__construct();

			//model
			$this->load->model('history_m');
		}

		//Index

		public function index()
		{
			$this->load->view('history_v');
		}

		public function insert_krl()
		{
			$this->history_m->set_id_krl($this->input->post('id_krl'));

			$query = $this->history_m->view_by_id_krl_tambah();

			if(! $query->num_rows())
			{
				$this->history_m->set_nama($this->input->post('nama'));
				$this->history_m->set_stasiun_awal($this->input->post('stasiun_awal'));
				$this->history_m->set_stasiun_akhir($this->input->post('stasiun_akhir'));
        $this->history_m->set_keberangkatan($this->input->post('keberangkatan'));
				$this->history_m->set_jml_tiket($this->input->post('jml_tiket'));
				$this->history_m->set_status($this->input->post('status'));

				$this->history_m->insert_krl();

				redirect(site_url().'history');
			}
			else
				redirect(site_url().'history/index/error_save');
		}

		public function insert_jadwal()
		{
			$this->history_m->set_stasiun($this->input->post('stasiun'));
			$this->history_m->set_jam($this->input->post('jam'));
			$this->history_m->set_id_krl($this->input->post('id_krl'));

			$this->history_m->insert_jadwal();

			redirect(site_url().'history');
		}

		public function delete_all()
		{
			$this->history_m->delete_all();

			redirect(site_url().'history');
		}




	}
?>
