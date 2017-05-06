<?php
class M_pesan extends CI_Model {
    function getall() {
        $ambildata = $this->db->get('pesan');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function getall2() {
        $ambildata = $this->db->get('mobil');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function tambah() {
        $nama_pemesan = $this->input->post('nama_pemesan');
        $merek  = $this->input->post('merek');
		$warna = $this->input->post('warna');
        $alamat = $this->input->post('alamat');
		$email  = $this->input->post('email');
		$no_hp  = $this->input->post('no_hp');
        $data = array (
            'nama_pemesan' => $nama_pemesan,
            'merek'  => $merek,
            'warna'=> $warna,
            'alamat'=> $alamat,
			'email'=> $email,
			'no_hp'=> $no_hp
			
        ); 
        $this->db->insert('pesan',$data);
    }
}
?>