<?php
class Vid extends CI_Controller{
  public function __construct()
  {
    parent::__construct();

    //model
    $this->load->model('nyumbang_m');

  }
  public function index( ){
    $data['video'] = $this->db->query("select * from video order by id_video asc  limit 10")->result();

      $this->load->view('video_v',$data);

}
function video(){
  $data['video'] = $this->nyumbang_m->get_data('video')->result();

  $this->load->view('video_v',$data);

}


function insert_video(){
  $data['video'] =$this->nyumbang_m->get_data('video')->result();
  $this->load->view('header_v');
  $this->load->view('video_v'.$data);
  $this->load->view('footer_v');
 }
 function insert_video_act()
 {
        $configVideo['upload_path']='./assets/video/';
         $configVideo['max_size'] = '100000';
         $configVideo['allowed_types'] = 'avi|flv|wmv|mp3|mp4';
         $configVideo['remove_spaces']=TRUE;
     		$configVideo['overwrite']=FALSE;
        $configVideo['file_name'] = 'video'.time();
         $this->load->library('upload', $configVideo);

if($this->upload->do_upload('videoo')){

        $id_video = $this->input->post('id_video');
        $nama_ustad = $this->input->post('nama_ustad');
        $judul_ceramah = $this->input->post('judul_ceramah');

        $file = $this->upload->data();
        $videoo = $file['file_name'];

         $data = array(
					'nama_ustad' => $nama_ustad,
					'judul_ceramah' => $judul_ceramah,
          'videoo' => $videoo
        );

          $this->nyumbang_m->insert_data($data,'video');
          redirect(base_url().'vid/video');
          $this->session->set_flashdata('msg','data berhasil di upload');
              redirect('vid/video_v');

}
}



 }
