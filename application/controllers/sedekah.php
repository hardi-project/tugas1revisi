<?PHP
	class Sedekah extends CI_Controller
	{
		//Constructor

		public function __construct()
		{
			parent::__construct();

			//model
			$this->load->model('nyumbang_m');
		}

		//Index

		public function index()
		{
			$data['sodaqoh'] = $this->db->query
		("select * from sodaqoh order by kd_sodaqoh desc
		limit 10")->result();



				$this->load->view('sedekah_v',$data);

		}

	 function sodaqoh(){
			$data['sodaqoh'] = $this->nyumbang_m->get_data('sodaqoh')->result();

			$this->load->view('sedekah_v',$data);

}
	 public	function insert_sedekah(){
     $data['bank'] =$this->nyumbang_m->get_data('bank')->result();
		$this->load->view('header_v');
		$this->load->view('sedekah_v'.$data);
		$this->load->view('footer_v');
	}

		function insert_sedekah_act()
		{

$config['upload_path']='./assets/img/';
    $config['max_size'] = '2048';
    $config['allowed_types'] = 'jpg|png|jpeg';
		$config['remove_spaces']=TRUE;
		$config['overwrite']=TRUE;

			$config['file_name'] = 'gambar'.time();
		$this->load->library('upload', $config);

if($this->upload->do_upload('gambar')){


							$kd_sodaqoh = $this->input->post('kd_sodaqoh');
							$nama_muzaki = $this->input->post('nama_muzaki');
							$jumlah_sedekah = $this->input->post('jumlah_sedekah');
							$lembaga = $this->input->post('lembaga');
					    $bank = $this->input->post('bank');
							$file = $this->upload->data();
							$gambar = $file['file_name'];
    $data = array(
				'kd_sodaqoh' => $kd_sodaqoh,
				'nama_muzaki' => $nama_muzaki,
				'jumlah_sedekah' => $jumlah_sedekah,
				'lembaga' => $lembaga,
        'bank' => $bank,
        'gambar'=>$gambar
			);
			$this->nyumbang_m->insert_data($data,'sodaqoh');
							redirect(base_url().'sedekah/sodaqoh');
			$this->session->set_flashdata('message','Terima Kasih');
					redirect('sedekah_v');

		}

	}
	function salurkan(){
		$this->load->library('dompdf_gen');
	$data['sodaqoh'] =$this->db->query('select * from sodaqoh where lembaga="BAZNAS"')->result();
	$this->load->view('salurkan',$data);
	$paper_size ='A4';
	$orientation='landscape';
	$html=$this->output->get_output();
	$this->dompdf->set_paper($paper_size, $orientation);
	$this->dompdf->load_html($html);
	$this->dompdf->render();
	$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
	}
	function salurkan1(){
		$this->load->library('dompdf_gen');
	$data['sodaqoh'] =$this->db->query('select * from sodaqoh where lembaga="Dompet Dhuafa"')->result();
	$this->load->view('salurkan',$data);
	$paper_size ='A4';
	$orientation='landscape';
	$html=$this->output->get_output();
	$this->dompdf->set_paper($paper_size, $orientation);
	$this->dompdf->load_html($html);
	$this->dompdf->render();
	$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
	}
	function salurkan2(){
		$this->load->library('dompdf_gen');
	$data['sodaqoh'] =$this->db->query('select * from sodaqoh where lembaga="Rumah Yatim"')->result();
	$this->load->view('salurkan',$data);
	$paper_size ='A4';
	$orientation='landscape';
	$html=$this->output->get_output();
	$this->dompdf->set_paper($paper_size, $orientation);
	$this->dompdf->load_html($html);
	$this->dompdf->render();
	$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
	}
	function salurkan3(){
		$this->load->library('dompdf_gen');
	$data['sodaqoh'] =$this->db->query('select * from sodaqoh where lembaga="Aksi Cepat Tanggap"')->result();
	$this->load->view('salurkan',$data);
	$paper_size ='A4';
	$orientation='landscape';
	$html=$this->output->get_output();
	$this->dompdf->set_paper($paper_size, $orientation);
	$this->dompdf->load_html($html);
	$this->dompdf->render();
	$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
	}
}
