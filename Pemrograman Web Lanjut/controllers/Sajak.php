<?php

  class Sajak extends CI_Controller {

    public function __construct(){
      parent::__construct();
      $this->load->model('sajak_model');

    }

    public function cek_aktif() {
		if ($this->session->userdata('username') == "" && $this->session->userdata('status') == "" && $this->session->userdata('masuk') == false) {
			redirect('sajak/login');
	   }
   }



    public function page($page = "beranda"){

      $this->cek_aktif();
      $user=$this->session->userdata('username');
      $baris_user=$this->sajak_model->get_data_user($user)->row();
      $list_notif=$this->sajak_model->get_pemberitahuan($user)->result();

      $itung_notif=$this->sajak_model->get_pemberitahuan($user)->num_rows();
      $baris_total_sajak=$this->sajak_model->get_total_sajak()->row();
      $baris_total_user=$this->sajak_model->get_total_user()->row();
      $baris_total_voting=$this->sajak_model->get_total_voting()->row();
      $baris_list_status=$this->sajak_model->get_list_status()->result();
      $baris_list_pesan=$this->sajak_model->get_list_pesan($user)->result();
      $jumlah_pesan=$this->sajak_model->get_list_pesan($user)->num_rows();

      $list_sajak_samping=$this->sajak_model->get_sajak_limit()->result();
      $list_member_admin=$this->sajak_model->get_list_member()->result();

      $statusku=$this->sajak_model->get_my_status($user)->result();
      $list_sajak=$this->sajak_model->get_list_sajak()->result();
      $kategori_sajak=$this->sajak_model->get_kategori_sajak()->result();
      $data=array('baris_user'=>$baris_user,
      'baris_total_sajak'=>$baris_total_sajak,
      'baris_total_user'=>$baris_total_user,
      'baris_total_voting'=>$baris_total_voting,
      'list_status'=>$baris_list_status,
      'list_pesan'=>$baris_list_pesan,
      'list_sajak'=>$list_sajak,
      'kategori_sajak'=>$kategori_sajak,
      'itung_notif'=>$itung_notif,
      'notif'=>$list_notif,
      'jumlah_pesan'=>$jumlah_pesan,
      'sjk_samping'=>$list_sajak_samping,
      'list_member'=>$list_member_admin,
      'statusku'=>$statusku,
      );
      $this->load->view('index_sajak',$data);



    }

    public function vote_sajak($id){
      $user=$this->session->userdata('username');
      $this->sajak_model->vote_sajak($id,$user);
    }

    public function ubah_foto(){
      $user=$this->session->userdata('username');
      var_dump($_FILES['foto_profil']['name']);
      $config['upload_path']          = './foto_profil/';
      $config['allowed_types']        = 'gif|jpg|png';
      $config['max_size']             = 1000;
      $config['max_width']            = 1024;
      $config['max_height']           = 768;
      $config['file_name']             = "tole_".time();
    $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('foto_profil'))
      {

      echo "file gagal di upload";

      }
      else
      {
              $namafile=$this->upload->data('file_name') ;
            $this->sajak_model->ubah_foto($user,$namafile);
            redirect('sajak/page/my_profile');

      }
      //var_dump($namafile);
    }

    public function update_status(){
      $status=$this->input->post('status');
      $user=$this->session->userdata('username');
      $this->sajak_model->post_status($user,$status);
      redirect ('sajak/page/');
    }

    public function update_profil(){
      $user=$this->session->userdata('username');
      $nama=$this->input->post('nama');
      $email=$this->input->post('email');
      $tgl_lahir=$this->input->post('tgl_lahir');
      $alamat=$this->input->post('alamat');
      $tentang=$this->input->post('tentang');
      $this->sajak_model->update_profil($user,$nama,$email,$tgl_lahir,$alamat,$tentang);
      redirect('sajak/page/my_profile');
    }

    public function proses_buat_sajak(){
      $judul=$this->input->post('judul_sajak');
      $isi=$this->input->post('isi_sajak');
      $kategori=$this->input->post('kategori');
      $this->sajak_model->buat_sajak($judul,$isi,$kategori);
      redirect('sajak/page/buat_sajak');
    }

    public function tutup_sajak($id){
      $this->sajak_model->tutup_sajak($id);
      redirect('sajak/page/buat_sajak');
    }

    public function delete_sajak($id){
      $this->sajak_model->delete_sajak($id);
      redirect('sajak/page/buat_sajak');
    }

    public function delete_pesan($id){

      $this->sajak_model->delete_pesan($id);
      $delete['status']="oke";
      $this->ubah_json($delete);
      exit();
    }
    public function kirim_pesan(){
      $pengirim=$this->session->userdata('username');
      $user=$this->input->post('username');
      $isi=$this->input->post('isi_pesan');
      $judul=$this->input->post('judul_pesan');
      $this->sajak_model->kirim_pesan($user,$judul,$isi,$pengirim);
      redirect ('sajak/page/pesan');
    }

    public function my_profile(){
      $my=$this->sajak_model->my_profile($this->session->userdata('username'));
      $data=array('myprofil'=>$my);
      $this->load->view('my_profile',$data);
    }

    public function delete_my_status($idstatus){
      $user=$this->session->userdata('username');
      $this->sajak_model->delete_my_status($idstatus,$user);
      redirect('sajak/page/my_profile');
    }
	
	public function register(){ //zaza
	//panggil view register
		$this->load->view('register');
	}
	public function aksi_register(){//helmi
	//proses register ke(register_user)
	}

    public function login(){

      $this->load->view('login');

    }
    public function logout(){
      $data=array(
        'username',
        '',
        'masuk'
      );
      $this->session->unset_userdata($data);
      redirect('sajak/login');
    }
    public function aksi_login(){
      $user=$this->input->post('username');
      $pass=$this->input->post('password');
      $cek_login=$this->sajak_model->get_data_login($user,$pass)->num_rows();
      $baris=$this->sajak_model->get_data_login($user,$pass)->row();

      if($cek_login>0){
        $data=array(
          'username'=>$baris->username,
          'status'=>$baris->status,
          'foto'=>$baris->foto
        );
        $this->session->set_userdata($data);

        $login['log']['masuk']			= "oke";
        $login['log']['keterangan']		= "Berhasil Login";
      }else {
		$login['log']['masuk']			= "fail";
		$login['log']['keterangan']		= "Maaf, username dan password tidak ditemukan";

		}
    $this->ubah_json($login);
    }

    public function ubah_json($data) {
		header('Content-Type: application/json');
		echo json_encode($data);
	}

  }




?>
