<?PHP
	class Zakat_2 extends CI_Controller
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
			$data['zakat_mal'] = $this->db->query
		("select * from zakat_mal order by kd_zakat_m desc limit 10")->result();

				$this->load->view('zakat_mal_v',$data);

		}

		public function zakat_mal(){
			$data['zakat_mal'] = $this->nyumbang_m->get_data('zakat_mal')->result();

			$this->load->view('zakat_mal_v',$data);

		}
		public	function insert_zakat_2(){
			$data['zakat_mal'] =$this->nyumbang_m->get_data('zakat_mal')->result();
		$this->load->view('header_v');
		$this->load->view('zakat_mal_v/zakat_mal_v');
		$this->load->view('footer_v');
		}

		public function insert_zakat_m_act()

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
		$penghasilan = $this->input->post('penghasilan');
		$dikeluarkan = $this->input->post('dikeluarkan');
		$lembaga = $this->input->post('lembaga');
$bank = $this->input->post('bank');
$file = $this->upload->data();
$gambar = $file['file_name'];
			$data = array(
        'nama_muzaki' => $nama_muzaki,
				'penghasilan' => $penghasilan,
				'dikeluarkan' => $dikeluarkan,
			  'lembaga' => $lembaga,
				'bank' => $bank,
        'gambar'=>$gambar
			);

			$this->nyumbang_m->insert_data($data,'zakat_mal');
			redirect(base_url().'zakat_2/zakat_mal');


			$this->session->set_flashdata('msg','data berhasil di upload');
					redirect('zakat_mal_v');

}
		}
		function salurkan_mal(){
			$this->load->library('dompdf_gen');
		$data['zakat_mal'] =$this->db->query('select * from zakat_mal where lembaga="BAZNAS"')->result();
		$this->load->view('salurkan_mal',$data);
		$paper_size ='A4';
		$orientation='landscape';
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
		}
		function salurkan_mal1(){
			$this->load->library('dompdf_gen');
		$data['zakat_mal'] =$this->db->query('select * from zakat_mal where lembaga="BAZNAS"')->result();
		$this->load->view('salurkan_mal',$data);
		$paper_size ='A4';
		$orientation='landscape';
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
		}
		function salurkan_mal2(){
			$this->load->library('dompdf_gen');
		$data['zakat_mal'] =$this->db->query('select * from zakat_mal where lembaga="BAZNAS"')->result();
		$this->load->view('salurkan_mal',$data);
		$paper_size ='A4';
		$orientation='landscape';
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
		}
		function salurkan_mal3(){
			$this->load->library('dompdf_gen');
		$data['zakat_mal'] =$this->db->query('select * from zakat_mal where lembaga="BAZNAS"')->result();
		$this->load->view('salurkan_mal',$data);
		$paper_size ='A4';
		$orientation='landscape';
		$html=$this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
		}
  }
