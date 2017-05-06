<?php
class M_pelanggan extends CI_Model {
    function getall() {
        $ambildata = $this->db->get('pelanggan');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function getall2() {
        $this->db->order_by('id_pelanggan', 'desc');
        $this->db->limit('1');
        $ambildata = 
        //$this->db->select('*');
        //$this->db->from('servis');
        $this->db->get('pelanggan');
        
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
          foreach ($ambildata->result() as $data) {
              $hasil[] = $data;
            }
            return $hasil;
       }
    }
 
    function tambah() {
		$id_pelanggan = $this->input->post('id_pelanggan');
        $nama_pelanggan = $this->input->post('nama_pelanggan');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $data = array (
			'id_pelanggan' => $id_pelanggan,
            'nama_pelanggan'  => $nama_pelanggan,
            'alamat'=> $alamat,
            'email' => $email,
            'no_hp'=> $no_hp
        ); 
        $this->db->insert('pelanggan',$data);
    }
	
	function update($id) {
        $nama_pelanggan = $this->input->post('nama_pelanggan');
        $alamat = $this->input->post('alamat');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $data = array (
            'nama_pelanggan'  => $nama_pelanggan,
            'alamat'=> $alamat,
            'email' => $email,
            'no_hp'=> $no_hp
        ); 
        $this->db->where('id_pelanggan', $id);
        $this->db->update('pelanggan', $data);
    }
 
    function getById($id) {
        return $this->db->get_where('pelanggan', array('id_pelanggan' => $id))->row();
    }
	
	function hapus($id) {
		$this->db->where('id_pelanggan',$id);
		$this->db->delete('pelanggan');
	}
}
?>