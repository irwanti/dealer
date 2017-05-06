<?php
class M_salesman extends CI_Model {
    function getall() {
        $ambildata = $this->db->get('salesman');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	/*function getall2() {
        $ambildata = $this->db->get('sparepart');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }*/
 
    function tambah() {
		$id_salesman = $this->input->post('id_salesman');
        $nama_salesman = $this->input->post('nama_salesman');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $data = array (
			'id_salesman' => $id_salesman,
            'nama_salesman'  => $nama_salesman,
            'alamat'=> $alamat,
            'no_hp'=> $no_hp
        ); 
        $this->db->insert('salesman',$data);
    }
	
	function update($id) {
        $id_salesman = $this->input->post('id_salesman');
        $nama_salesman = $this->input->post('nama_salesman');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $data = array (
            'nama_salesman'  => $nama_salesman,
            'alamat'=> $alamat,
            'no_hp'=> $no_hp
        ); 
        $this->db->where('id_salesman', $id);
        $this->db->update('salesman', $data);
    }
 
    function getById($id) {
        return $this->db->get_where('salesman', array('id_salesman' => $id))->row();
    }
	
	function hapus($id) {
		$this->db->where('id_salesman',$id);
		$this->db->delete('salesman');
	}
}
?>