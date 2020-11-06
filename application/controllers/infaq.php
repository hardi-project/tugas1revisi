<?PHP
	class Infaq extends CI_Controller
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
			$data['hardi'] = $this->db->query
		("select * from hardi order by id_krl desc
		limit 10")->result();



				$this->load->view('infaq_v',$data);

		}

	  function hardi(){
			$data['hardi'] = $this->nyumbang_m->get_data('hardi')->result();

			$this->load->view('infaq_v',$data);

}
	 public	function insert_infaq(){

		$this->load->view('header_v');
		$this->load->view('infaq_v/infaq_v');
		$this->load->view('footer_v');
	}

		function insert_infaq_act()
		{
			$config['upload_path']='./assets/img/';
			    $config['max_size'] = '2048';
			    $config['allowed_types'] = 'jpg|png|jpeg';
					$config['remove_spaces']=TRUE;
					$config['overwrite']=TRUE;

						$config['file_name'] = 'gambar'.time();
					$this->load->library('upload', $config);

			if($this->upload->do_upload('gambar')){



		$id_krl = $this->input->post('id_krl');
		$nama = $this->input->post('nama');
		$stasiun_awal = $this->input->post('stasiun_awal');
		$stasiun_akhir = $this->input->post('stasiun_akhir');
		$jam = $this->input->post('jam');
		$file = $this->upload->data();
		$gambar = $file['file_name'];


			$data = array(
				'id_krl' => $id_krl,
				'nama' => $nama,
				'stasiun_awal' => $stasiun_awal,
				'stasiun_akhir' => $stasiun_akhir,
				'jam' => $jam,
				'gambar'=>$gambar
			);

			$this->nyumbang_m->insert_data($data,'hardi');
			redirect(base_url().'infaq/hardi');


			$this->session->set_flashdata('msg','data berhasil di upload');
					redirect('infaq_v');


	}
}
function infaqq(){
	$this->load->library('dompdf_gen');
$data['hardi'] =$this->db->query('select * from hardi where jam="BAZNAS"')->result();
$this->load->view('salurkan_infaq',$data);
$paper_size ='A4';
$orientation='landscape';
$html=$this->output->get_output();
$this->dompdf->set_paper($paper_size, $orientation);
$this->dompdf->load_html($html);
$this->dompdf->render();
$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
}
function infaqq1(){
	$this->load->library('dompdf_gen');
$data['hardi'] =$this->db->query('select * from hardi where jam="Dompet Dhuafa"')->result();
$this->load->view('salurkan_infaq',$data);
$paper_size ='A4';
$orientation='landscape';
$html=$this->output->get_output();
$this->dompdf->set_paper($paper_size, $orientation);
$this->dompdf->load_html($html);
$this->dompdf->render();
$this->dompdf->stream("salurkan_infaq.pdf", array('Attachment'=>0));
}
function infaqq2(){
	$this->load->library('dompdf_gen');
$data['hardi'] =$this->db->query('select * from hardi where jam="Rumah Yatim"')->result();
$this->load->view('salurkan_infaq',$data);
$paper_size ='A4';
$orientation='landscape';
$html=$this->output->get_output();
$this->dompdf->set_paper($paper_size, $orientation);
$this->dompdf->load_html($html);
$this->dompdf->render();
$this->dompdf->stream("salurkan.pdf", array('Attachment'=>0));
}
function infaqq3(){
	$this->load->library('dompdf_gen');
$data['hardi'] =$this->db->query('select * from hardi where jam="Aksi Cepat Tanggap"')->result();
$this->load->view('salurkan_infaq',$data);
$paper_size ='A4';
$orientation='landscape';
$html=$this->output->get_output();
$this->dompdf->set_paper($paper_size, $orientation);
$this->dompdf->load_html($html);
$this->dompdf->render();
$this->dompdf->stream("salurkan_infaq.pdf", array('Attachment'=>0));
}
}
