<?php
class M_kontak extends CI_Model {
    function getall() {
        $ambildata = $this->db->get('kontak');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function tambah() {
        $namap = $this->input->post('namap');
        $email  = $this->input->post('email');
        $isi = $this->input->post('isi');
        $data = array (
            'namap' => $namap,
            'email'  => $email,
            'isi'=> $isi
        ); 
        $this->db->insert('kontak',$data);
    }
}
?>