<?php
  class Sajak_model extends CI_Model{


    //read
    public function get_data_login($user,$password){
      $where=array('username'=>$user,'password'=>$password);
      return $this->db->get_where('user',$where);
    }
    public function get_kategori_sajak(){
      return $this->db->get('kategori_sajak');
    }
    public function get_data_user($user){
      $where=array('username'=>$user);
      return $this->db->get_where('user',$where);
    }
    public function get_pemberitahuan($user){
      $where=array('username'=>$user);
      return $this->db->get_where('pemberitahuan',$where);
    }
    public function get_list_pesan($user){//zaza
     //query ambil list pesan parameter $user
    }

    public function get_list_status(){
    return $this->db->query("select su.isi_status,su.tgl_status,u.* from status_user su ,user u where su.username=u.username");
    }
    public function my_profile($user){
      return $this->db->query("select * from user where username=$user");
    }

    public function get_total_user(){//helmi
      //query sql itung total user
    }

    public function get_total_sajak(){//zaza
      //query sql itung total sajak
    }
    public function get_total_voting(){//helmi
     //query sql itung total vote
	    return $this->db->query("select count(*) from user_vote_sajak");
    }
    public function get_sajak_limit(){

        return $this->db->query('select s.*,sk.kategori from sajak s,kategori_sajak sk where sk.id_kategori=s.id_kategori limit 8');
    }
    public function get_list_member(){

      return $this->db->get('user');
    }

    public function get_my_status($user){
      $where=array('username'=>$user);
      return $this->db->get_where('status_user',$where);
    }

    public function get_list_sajak(){//zaza
     //query tampilin semua sajak 
    }

    //delete
    public function delete_pesan($id){

      //$this->db->query('delete from pesan where id_pesan='.$id);
        $this->db->where('id_pesan', $id);
      $this->db->delete('pesan');
    }

    public function delete_sajak($id){
      $this->db->where('id_sajak',$id);
      $this->db->delete('sajak');

    }

    public function delete_my_status($idstatus,$user){
      $where=array('id_status'=>$idstatus,'username'=>$user);
      $this->db->delete('status_user',$where);
    }

    public function liat_sajak(){
//		$where=array('id_sajak'=>$id);
    return $this->db->get_where('sajak');
  }







    //update_

    public function tutup_sajak($id){
    $this->db->set('status_sajak', 'tidak aktif');
    $this->db->where('id_sajak', $id);
    $this->db->update('sajak');
    }

    public function ubah_foto($user,$nmfile){
      $this->db->set('foto',$nmfile);
      $this->db->where('username',$user);
      $this->db->update('user',$update);
    }
    public function update_profil($user,$nama,$email,$tgl_lahir,$alamat,$tentang){
      $data=array(
        'email'=>$email,
        'nama'=>$nama,
          'tgl_lahir'=>$tgl_lahir,
        'alamat'=>$alamat,
        'tentang'=>$tentang
      );
      $this->db->where('username',$user);
      $this->db->update('user',$data);
    }

    //insert

    public function vote_sajak($id,$user){
      $insert=array('id_sajak'=>$id,'username'=>$user);
      $this->db->insert('user_vote_sajak',$insert);
      redirect('sajak/page/liat_sajak');
    }

    public function register_user($data){//helmi
		//query register
	
    }

    public function buat_sajak($judul,$isi,$id_kategori){
        date_default_timezone_set('Asia/Jakarta');
      $insert=array(
          'judul_sajak'=>$judul,
          'isi_sajak'=>$isi,
          'id_kategori'=>$id_kategori,
          'tgl_dibuat'=>date('Y-m-d h:i:s')
      );
      $this->db->insert('sajak',$insert);
    }

    public function post_status($user,$status){
      date_default_timezone_set('Asia/Jakarta');
      $data=array(
        'isi_status'=>$status,
        'username'=>$user,
        'tgl_status'=>date("Y-m-d h:i:s")
      );
      $this->db->insert('status_user',$data);
    }
    public function kirim_pesan($user,$judul,$isi,$pengirim){ //helmi
    date_default_timezone_set('Asia/Jakarta');
 	//query insert dengan format tgl dan jam
    }
  }
