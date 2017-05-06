<?php
class M_input extends CI_Model {
   function getall() {
        $ambildata = $this->db->get('input_sparepart');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
	
	function getall2() {
        $ambildata = $this->db->get('sparepart');
        //jika data ada (lebih dari 0)
        if ($ambildata->num_rows() > 0 ) {
            foreach ($ambildata->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
 
    function tambah() {
        $tgl_beli_s = $this->input->post('tgl_beli_s');
        $id_sparepart  = $this->input->post('id_sparepart');
        $suplier = $this->input->post('suplier');
        $jml_beli = $this->input->post('jml_beli');
        $data = array (
            'tgl_beli_s' => $tgl_beli_s,
            'id_sparepart'  => $id_sparepart,
            'suplier'=> $suplier,
            'jml_beli' => $jml_beli
        ); 
        $this->db->insert('input_sparepart',$data);
    }
	
	function update($id) {
        $tgl_beli_s = $this->input->post('tgl_beli_s');
        $id_sparepart  = $this->input->post('id_sparepart');
        $suplier = $this->input->post('suplier');
        $jml_beli = $this->input->post('jml_beli');
        $data = array (
            'tgl_beli_s' => $tgl_beli_s,
            'id_sparepart'  => $id_sparepart,
            'suplier'=> $suplier,
            'jml_beli' => $jml_beli
        );
        $this->db->where('id_input', $id);
        $this->db->update('input_sparepart', $data);
    }
 
    function getById($id) {
        return $this->db->get_where('input_sparepart', array('id_input' => $id))->row();
    }
	
	function hapus($id) {
		$this->db->where('id_input',$id);
		$this->db->delete('input_sparepart');
	}
}
?>