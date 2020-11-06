<?PHP
	class Zakat extends CI_Controller
	{
		//Constructor

		public function __construct()
		{
			parent::__construct();

			//model
			$this->load->model('nyumbang_m');
		}

		public function index()
		{
			$data['zakat_fitrah'] = $this->db->query
		("select * from zakat_fitrah order by kd_zakat_f desc limit 10")->result();

				$this->load->view('zakat_v',$data);

		}

		public function zakat_fitrah(){
			$data['zakat_fitrah'] = $this->nyumbang_m->get_data('zakat_fitrah')->result();

			$this->load->view('zakat_v',$data);

		}
		public	function insert_zakat(){
			$data['zakat_fitrah'] =$this->nyumbang_m->get_data('zakat_fitrah')->result();
		$this->load->view('header_v');
		$this->load->view('zakat_v/zakat_v');
		$this->load->view('footer_v');
		}

		public function insert_zakat_f_act()

		{
			$config['upload_path']='./assets/img/';
	    $config['max_size'] = '2048';
	    $config['allowed_types'] = 'jpg|png|jpeg';
			$config['remove_spaces']=TRUE;
			$config['overwrite']=TRUE;

				$config['file_name'] = 'gambar'.time();
			$this->load->library('upload', $config);

	if($this->upload->do_upload('gambar')){

		$nama_muzaki = $this->input->post('nama_muzaki');
		$nilai_zakat = $this->input->post('nilai_zakat');
		$jumlah = $this->input->post('jumlah');
		$lembaga = $this->input->post('lembaga');
$bank = $this->input->post('bank');
$file = $this->upload->data();
$gambar = $file['file_name'];
			$data = array(
        'nama_muzaki' => $nama_muzaki,
				'nilai_zakat' => $nilai_zakat,
				'jumlah' => $jumlah,
			  'lembaga' => $lembaga,
				'bank' => $bank,
        'gambar'=>$gambar
			);

			$this->nyumbang_m->insert_data($data,'zakat_fitrah');
			redirect(base_url().'zakat/zakat_fitrah');


			$this->session->set_flashdata('msg','data berhasil di upload');
					redirect('zakat_v');

}
		}
		function salurkan_fitrah(){
			$this->load->library('dompdf_gen');
		$data['zakat_fitrah'] =$this->db->query('select * from zakat_fitrah where lembaga="BAZNAS"')->result();
		$this->load->view('salurkan_fitrah',$data);
		$paper_size ='A4';
		$orientation='landscape';
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
		}
		function salurkan_fitrah1(){
			$this->load->library('dompdf_gen');
		$data['zakat_fitrah'] =$this->db->query('select * from zakat_fitrah where lembaga="Dompet Dhuafa"')->result();
		$this->load->view('salurkan_fitrah',$data);
		$paper_size ='A4';
		$orientation='landscape';
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
		}
		function salurkan_fitrah2(){
			$this->load->library('dompdf_gen');
		$data['zakat_fitrah'] =$this->db->query('select * from zakat_fitrah where lembaga="Rumah Yatim"')->result();
		$this->load->view('salurkan_fitrah',$data);
		$paper_size ='A4';
		$orientation='landscape';
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
		}
		function salurkan_fitrah3(){
			$this->load->library('dompdf_gen');
		$data['zakat_fitrah'] =$this->db->query('select * from zakat_fitrah where lembaga="Aksi Cepat Tanggap"')->result();
		$this->load->view('salurkan_fitrah',$data);
		$paper_size ='A4';
		$orientation='landscape';
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
		}
  }
